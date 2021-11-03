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
    return view('index');
});
Route::get('/contacto.blade.php', function () {
    return view('contacto');
});
Route::get('/servicios.blade.php', function () {
    return view('servicios');
});
Route::get('/galeria.blade.php', function () {
    return view('galeria');
});
Route::get('/index.blade.php', function () {
    return view('index');
});
