<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Students;

use App\Livewire\Forms\StudentForm;

class CreateStudent extends Component
{
    public StudentForm $studentForm;

    public function create() {
        $this->validate();

        Students::create($this->studentForm->all());

        return $this->redirect('/dashboard/students');
    }

    #[Title("Create New Student")]
    public function render()
    {
        return view('livewire.create-student');
    }
}
