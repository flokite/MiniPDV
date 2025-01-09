<?php

use Illuminate\Support\Facades\Route;

require('web/auth.php');
require('web/produtos.php');
require('web/usuarios.php');
require('web/vendas.php');

Route::get('/', function () {
    return view('welcome');
});

