<?php

namespace App\View\Components\Rmntor;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $options,
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.select-input');
    }
}
