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

    public function privacy_policy(){
      return view('privacy_policy');
    }
    public function lavora_con_noi(){
      return view('lavora_con_noi');
    }


}
