<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class articlesController extends Controllers
{
	public function articles($page) {
		return view('article', compact('page'));
	}

	public function __construct()
{
 $this->middleware('auth');
}
}