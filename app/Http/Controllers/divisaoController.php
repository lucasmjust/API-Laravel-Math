<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class divisaoController extends Controller
{

    public function divisao(Request $request){
        $n1 = $request->input('n1');
        $n2 = $request->input('n2');

        return $n1 / $n2;
    }
}
