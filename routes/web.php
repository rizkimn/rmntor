<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Rmntor\Dashboard;
use App\Livewire\Rmntor\Tables;
use App\Livewire\Rmntor\Forms;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/tables', Tables::class);
Route::get('/dashboard/forms', Forms::class);
