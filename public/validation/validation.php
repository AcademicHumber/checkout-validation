<?php




/**
 * Verifica que se ha insertado un correo válido
 *
 * @param string $str
 *
 * @return boolean
 */
function validar_correo(string $str = null): bool
{
    if (preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i", $str)) {
        return true;
    }

    return false;
}


/**
 * Verifica que los números de la tarjeta tengan un formato correcto.
 *
 * @param string|null $ccNumber
 *
 * @return boolean
 */
function validar_tarjeta(?string $ccNumber): bool
{

    // Asegurarse de que la longitud no es igual a 0
    if (strlen($ccNumber) === 0) {
        return false;
    }

    // Quitar todos los espacios y guiones
    $ccNumber = str_replace([' ', '-'], '', $ccNumber);

    // Asegurarse de tener valores numéricos
    if (!is_numeric($ccNumber)) {
        return false;
    }

    // Asegurarse de que la longitud del valor ingresado es correcto
    $lengths = [16];

    if (!in_array((string) strlen($ccNumber), $lengths, true)) {
        return false;
    }

    // Asegurarse de que tiene un prefijo correcto
    $prefixes = [4];

    $validPrefix = false;

    foreach ($prefixes as $prefix) {
        if (strpos($ccNumber, $prefix) === 0) {
            $validPrefix = true;
            break;
        }
    }

    if ($validPrefix === false) {
        return false;
    }

    // Si todo está correcto, retornar verdadero

    return true;
}
