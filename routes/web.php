<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Rmntor\Dashboard;
use App\Livewire\Students;
use App\Livewire\CreateStudent;
use App\Livewire\Subjects;

use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/students', Students::class);
Route::get('/dashboard/students/new', CreateStudent::class);
Route::post('/dashboard/students/new', [StudentsController::class, 'store']);
Route::get('/dashboard/subjects', Subjects::class);
