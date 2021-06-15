<?php

namespace App\Controllers;

class project extends BaseController
{
	public function landing()
	{
		return view('landing');
	}
	public function checkout()
	{
		return view('checkout');
	}
	public function thanks()
	{
		return view('thanks');
	}
}
