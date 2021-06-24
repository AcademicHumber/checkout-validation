<?php

namespace App\Controllers;

class Checkout extends BaseController
{
	public function index()
	{
		if ($this->request->getMethod() == 'post') {
			$rules = [
				"correo" => "required|validar_correo",
				"numeroDeTarjeta" => "required|validar_tarjeta",
				"telefono" => "required|validar_celular",
				"fecha" => "required|validar_fecha",
				"cvv" => "required|validar_cvv",
				"titular" => "required|validar_titular",
				'fechaActual' => "required|validar_fecha_de_entrega"
			];

			$messages = [
				"correo" => [
					"required" => "El correo es requerido",
					"validar_correo" => "El correo es incorrecto, verifiquelo porfavor"
				],
				"numeroDeTarjeta" => [
					"required" => "El numeroDeTarjeta es requerido",
					"validar_tarjeta" => "El formato de la tarjeta es incorrecto, verifique"
				],
				"telefono" => [
					"required" => "El telefono es requerido",
					"validar_celular" => "Los valores ingresados no pertenecen a un número de Bolivia"
				],
				"fecha" => [
					"required" => "la fecha es requerida",
					"validar_fecha" => "La fecha de expiración no está dentro de los parámetros reales"
				],
				"cvv" => [
					"required" => "El cvv es requerido",
					"validar_cvv" => "El CVV tiene más o menos de los caracteres adecuados"
				],
				"titular" => [
					"required" => "El titular es requerido",
					"validar_titular" => "El nombre del titular tiene caracteres especiales, no admitidos"
				],
				"fechaActual" => [
					"required" => "La fecha actual es requerida",
					"validar_fecha_de_entrega" => "El formato de la fecha es incorrecto"
				]
			];

			if (!$this->validate($rules, $messages)) {

				echo view('checkout', [
					'validation' => $this->validator,
				]);
			} else {

				echo view('thanks');
			}
		} else {
			echo view('checkout');
		}
	}
}
