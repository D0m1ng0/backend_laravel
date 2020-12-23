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

//CREO HOME PAGE E VARIABILI
Route::get('/homepage', function() {
  $hello = "Hello World";
  $hi = "hi world !";
  return view('home', compact('hello','hi'));
});
