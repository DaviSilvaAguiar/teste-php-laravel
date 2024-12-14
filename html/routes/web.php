<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Outras rotas que já podem estar definidas
Route::get('/', function () {
    return view('welcome');
});

// A rota do CRUD de contatos
Route::resource('contacts', ContactController::class);
