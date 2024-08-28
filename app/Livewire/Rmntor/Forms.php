<?php

namespace App\Livewire\Rmntor;

use Livewire\Attributes\Title;
use Livewire\Component;

class Forms extends Component
{
    #[Title("Forms Page")]
    public function render()
    {
        return view('livewire.rmntor.forms');
    }
}
