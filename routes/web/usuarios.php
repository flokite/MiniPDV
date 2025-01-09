<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function() {
    return view('layout');
});

Route::get('/painel', function() {
    return view('painel/painel');
});