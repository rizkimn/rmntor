<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Subjects extends Component
{

    #[Title("Subjects Page")]
    public function render()
    {
        return view('livewire.subjects');
    }
}
