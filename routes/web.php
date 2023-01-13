<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/qw', function (){
    return response()->json(['test' => 'ok']);
});

Route::put('/', function (){
    return response()-> json(['test' => 'ok'] );
});

Route::group(array('middleware' => ['web']), function () {
    Route::post('/foo', function () {
        echo 1;
        return;
    });
});
