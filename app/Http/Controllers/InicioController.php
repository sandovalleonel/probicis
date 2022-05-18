<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function products(){
        return view('products');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function  nosotros(){
        return view('nosotros');
    }
}
