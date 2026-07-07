<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tickets;


// Rutas de acceso -----

// Ruta principal de index
Route::get('/', [Tickets::class, "index"])->name("ticket.index");

//Ruta de form crear nuevo
Route::get('/create', [Tickets::class, "create"])->name("ticket.create");
