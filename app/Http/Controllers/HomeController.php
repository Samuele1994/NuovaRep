<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $titolo = 'Home Page';
    return view('home',compact('titolo'));
    }
}
