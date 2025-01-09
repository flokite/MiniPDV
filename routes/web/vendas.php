<?php

use Illuminate\Support\Facades\Route;

Route::get('/pdv', function() {
    return view('painel/pdv');
});