<?php

namespace App\Livewire\Rmntor;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{

    #[Title("Dashboard Page")]
    public function render()
    {
        return view('livewire.rmntor.dashboard');
    }
}
