<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ConsumoApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $pai = Http::get('https://assembleia.api.pandora.com.br');
    $response = Http::withToken('9dc19260-ff58-4cf2-a5f4-e2f297595fab')->get('https://assembleia.api.pandora.com.br/eventos/7747/votante');
    $request_API = $response->json();
    $quant_votantes = count($request_API);

    return view('api', ['request_API' => $request_API, 'quant_votantes' => $quant_votantes]);
});
