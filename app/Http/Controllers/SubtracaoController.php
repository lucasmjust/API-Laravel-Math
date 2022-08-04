<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubtracaoController extends Controller
{


    public function subtracao($num1, $num2){

        header("Access-Control-Allow-Origin: *");

        $result = $num1 - $num2;

        return response()->json(['result' => $result]);
    }
}
