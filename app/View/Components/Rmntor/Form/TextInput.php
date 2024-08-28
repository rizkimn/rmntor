<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $placeholder = 'placeholder',
        public string $name = 'name',
        public string $label = 'Label',
        public string $class = '',
        public bool $showIcon = true,
        public string $icon = 'form-edit-icon',
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.text-input');
    }
}
