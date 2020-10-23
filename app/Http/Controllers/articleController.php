<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controllers
{
	public function articles($page) {
		return view('article', compact('page'));
	}
}