<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomaController extends Controller
{

    public function soma($num1, $num2){

        header("Access-Control-Allow-Origin: *");

        $result = $num1 + $num2;

        return response()->json(['result' => $result]);
    }
}
