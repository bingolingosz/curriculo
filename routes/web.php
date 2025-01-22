<?php

use Illuminate\Support\Facades\Route;

/*
    Rotas são as URL's liberadas para acesso.
*/

Route::get('/', function () {
    return view('index');
});