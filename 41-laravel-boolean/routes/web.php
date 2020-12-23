<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route per la pagina home
Route::get('/home', function() {

    $hello = "ciao";
    return view('home', compact('hello'));
}) -> name('home');
