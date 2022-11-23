<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function index($id = null)
    {
        $titolo = 'Elenco Libri';

    $libri = [
        1 => ['codice' => 1, 'titolo' => 'PHP 8: guida allo sviluppo', 'anno_pubblicazione' => '2022','copie_disponibili' => 30],
        2 =>['codice' => 2, 'titolo' => 'PHP & MYSQL: Server-Side Web Develo','anno_pubblicazione' => '2002','copie_disponibili' => 20],
        3 => ['codice' => 1, 'titolo' => 'Programming PHP', 'anno _pubblicazio','anno_pubblicazione' => '2122','copie_disponibili' => 130],
        4 => ['codice' => 3, 'titolo' => 'Javascript: la guida definitiva','anno_pubblicazione' => '2010','copie_disponibili' => 130],
        5 => ['codice' => 4, 'titolo' => 'Sviluppo front-end con Javascript','anno_pubblicazione' => '2092','copie_disponibili' => 390],
        6 => ['codice' => 5, 'titolo' => 'HTML5 e Javascript', 'anno_pubblicazione' => '2022','copie_disponibili' => 30],
    ];
    if($id){


//metodo alternativo al compact di scrittura con array:
        return view('libro', ['libro' => $libri[$id]]);

    }else{

        return view('libri ', compact('titolo','libri'));

    }
    }
}
