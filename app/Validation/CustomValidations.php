<?php

namespace App\Validation;

class CustomValidations
{
    /**
     * Verifica que se ha insertado un correo válido
     *
     * @param string $str
     *
     * @return boolean
     */
    public function validar_correo(string $str = null): bool
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
    public function validar_tarjeta(string $ccNumber): bool
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

    /**
     * Recibe el número de teléfono y lo valida según nuestro parametros
     * 
     */
    public function validar_celular(string $str): bool
    {

        /*El número puede comenzar por +591 o 591 o directamente 6 o 7*/
        if (preg_match('/^(\+591|591)?[ -]*(6|7)[ -]*([0-9][ -]*){7}$/', $str)) {

            return true;
        } else {

            return false;
        }
    }

    /**
     * Función para validar la fecha entrante
     * 
     */
    public function validar_fecha(string $str): bool
    {
        /*El código es máximo de 3 dígitos*/
        if (preg_match('/^\d{2}\/\d{4}$/', $str)) {

            return true;
        } else {

            return false;
        }
        return false;
    }

    /**
     * Función para validar el código de la tarjeta
     * 
     */
    public function validar_cvv(string $str): bool
    {
        /*El código es máximo de 3 dígitos*/
        if (preg_match('/^\d{3}$/', $str)) {

            return true;
        } else {

            return false;
        }
    }
    /**
     * Función para validar el nombre del titular de la tarjeta
     * 
     */
    public function validar_titular(string $str): bool
    {
        /*solo se permiten caracteres alfabéticos*/
        if (preg_match('/^[a-zA-Z\ ]$/', $str)) {
            
            return true;
        } else {

            return false;
        }
    }

    /**
     * Función para validar el nombre del titular de la tarjeta
     * 
     */
    public function  validar_fecha_de_entrega(string $str): bool
    {
        /*El código es máximo de 3 dígitos*/
        if (preg_match('/^(?:3[01]|[12][0-9]|0?[1-9])([\-.])(0?[1-9]|1[1-2])\1\d{4}$/', $str)) {

            return true;
        } else {

            return false;
        }
    }
}
