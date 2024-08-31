<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class StudentForm extends Form
{
    #[Validate('required')]
    public string $name;

    #[Validate('required')]
    public string $status;

    #[Validate('required')]
    public string $gpa;

    #[Validate('required')]
    public string $gps;

    #[Validate('required')]
    public string $address;
}
