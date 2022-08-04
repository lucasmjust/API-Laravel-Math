<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class divisaoController extends Controller
{


    public function divisao($num1, $num2){

        header("Access-Control-Allow-Origin: *");

        $result = $num1 / $num2;

        return response()->json(['result' => $result]);
    }
}
