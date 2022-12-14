<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('students', 'App\Http\Controllers\ApiController@getAllStudents');
// Route::get('students/{id}', 'App\Http\Controllers\ApiController@getStudent');
// Route::post('students', 'App\Http\Controllers\ApiController@createStudent');
// Route::put('students/{id}', 'App\Http\Controllers\ApiController@updateStudent');
// Route::delete('students/{id}','App\Http\Controllers\ApiController@deleteStudent');


// Route::get('/votantes','App\Http\Controllers\ApiController@getAllVotantes');


Route::get('documentos', 'App\Http\Controllers\ApiDocController@getAllDocuments');
Route::get('documentos/{id}', 'App\Http\Controllers\ApiDocController@getDocument');
Route::post('documentos', 'App\Http\Controllers\ApiDocController@createDocument');
Route::put('documentos/{id}', 'App\Http\Controllers\ApiDocController@updateDocument');
Route::delete('documentos/{id}','App\Http\Controllers\ApiDocController@deleteDocument');
