<?php

namespace App\Livewire\Rmntor;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Forms extends Component
{
    use WithFileUploads;
    /**
    * Make the parameters.
    */
    public $fullName;
    public $email;
    public $password;
    public $date;
    public $number;
    public $pilihan;
    public $address;
    public array $check;
    public array $fileInput;

    protected $rules = [
        'fullName' => 'string|max:255',
        'email' => 'email',
        'password' => 'min:6',
        'date' => 'date',
        'number' => 'numeric',
        'pilihan' => 'required',
        'address' => 'string',
        'check' => 'array|min:1',
        'fileInput.*' => 'file',
    ];

    public function send()
    {
        return dump($this);
    }

    #[Title("Forms Page")]
    public function render()
    {
        return view('livewire.rmntor.forms');
    }
}
