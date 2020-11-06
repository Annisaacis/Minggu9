<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controllers
{
	public function about() {
		return "Nama : Desy Annisa Ramadhani <br> 
        NIM : 1931710055";
	}

	public function __construct()
{
 $this->middleware('auth');
}
}