<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controllers
{
	public function welcome() {
	return "SELAMAT DATANG";
}
	public function about() {
	return "NAMA : Desy Annisa Ramadhani <br> NIM : 1931710055";
}
	public function articles($page){
	return 'Halaman Artikel Ini dengan ID'.$page;
}
}