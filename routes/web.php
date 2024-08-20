<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Rmntor\Dashboard;
use App\Livewire\Rmntor\Tables;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/tables', Tables::class);
