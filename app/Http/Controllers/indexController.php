<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controllers
{
    public function index(){
        return view ('index');
    }
}