<?php

namespace App\Livewire\Rmntor;

use Livewire\Attributes\Title;
use Livewire\Component;

class Tables extends Component
{
    #[Title("Tables Page")]
    public function render()
    {
        return view('livewire.rmntor.tables');
    }
}
