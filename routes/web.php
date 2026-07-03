<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tickets;

Route::get('/', [Tickets::class, "index"])->name("ticket.index");
Route::get('/create', [Tickets::class, "create"])->name("ticket.create");
