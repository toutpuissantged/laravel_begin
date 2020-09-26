<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcont extends Controller
{
    //

   public function list(){

       $liste=['fruit','legumes','autre'];
    return view('client.index',[
        'client'=>$liste
        ]);
   }
}