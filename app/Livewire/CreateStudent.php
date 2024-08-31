<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class CreateStudent extends Component
{
    public $name;
    public $status;
    public $gpa;
    public $gps;
    public $address;

    public function create() {
        dd($this->only(['name', 'status', 'gpa', 'gps', 'address']));
    }

    #[Title("Create New Student")]
    public function render()
    {
        return view('livewire.create-student');
    }
}
