<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmailInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $placeholder = 'rmn@friendzit.land',
        public string $name = 'email',
        public string $label = 'Email',
        public string $class = '',
        public bool $showIcon = true,
        public string $icon = 'at-icon',
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.email-input');
    }
}
