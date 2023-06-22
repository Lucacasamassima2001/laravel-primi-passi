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
    return view('homepage');
});

Route::get('/introduzione', function () {
    return view('introduzione');
});

Route::get('/primocatalogo', function () {
    return view('primocatalogo');
});

Route::get('/secondocatalogo', function () {
    return view('secondocatalogo');
});

Route::get('/terzocatalogo', function () {
    return view('terzocatalogo');
});

Route::get('/contattaci', function () {
    return view('contattaci');
});