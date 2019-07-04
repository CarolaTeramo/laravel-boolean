<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      //logica
      // se frontpage fosse stato dentro una cartella
      //dal nome prova avrei dovuto scrivere
      //view('prova.frontpage')
      return view('home');
    }
}
