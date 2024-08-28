<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CheckboxInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public mixed $index = '',
        public string $name = '',
        public bool $showLabel = true,
        public string $label = "Label",
    )
    {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.checkbox-input');
    }
}
