<?php


use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::resource('numeros', 'NumeroController');

Route::get('/soma', 'SomaController@soma');
Route::get('/subtracao', 'SubtracaoController@subtracao');
Route::get('/multiplicacao', 'MultiplicacaoController@multiplicacao');
Route::get('/divisao', 'divisaoController@divisao');






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
