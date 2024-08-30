<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NumberInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $placeholder = 'placeholder',
        public string $name = 'number',
        public string $label = 'Number',
        public string $class = '',
        public string $min = 0,
        public string $max = 666,
        public bool $showIcon = true,
        public string $icon = 'number-icon',
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.number-input');
    }
}
