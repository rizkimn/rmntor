<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Rmntor\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
