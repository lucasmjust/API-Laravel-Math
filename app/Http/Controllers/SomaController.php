<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomaController extends Controller
{

    public function soma(Request $request){
        $n1 = $request->input('n1');
        $n2 = $request->input('n2');


        return $n1 + $n2;
    }
}
