<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Students;

class StudentsController extends Controller
{
    public function store(CreateStudentRequest $request) : RedirectResponse
    {
        Students::create($request->validated());
        return redirect('/dashboard/students')->with('success', 'New Student Created Successfully');
    }
}
