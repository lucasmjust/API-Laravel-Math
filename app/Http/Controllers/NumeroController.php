<?php

namespace App\Http\Controllers;

use App\Numero;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NumeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numeros = Numero::all();
        return $numeros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numeros = new Numero;
        $numeros->numero1 = $request->numero1;
        $numeros->numero2 = $request->numero2;
        $numeros->save();
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $numeros = Numero::all()->find($id);

        if($numeros == null){
            return response()->json(['msg' => 'Nenhum registro encontrado!'], Response::HTTP_NOT_FOUND);
        }else{
            return $numeros->numero1 + $numeros->numero2;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
