<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContattiController extends Controller
{
    public function index(){
        $titolo = 'Contatti';
    return view('contatti',compact('titolo'));
    }
}
