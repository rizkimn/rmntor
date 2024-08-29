<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PasswordInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $placeholder = 'Admin#1234',
        public string $name = 'password',
        public string $label = 'Password',
        public string $class = '',
        public bool $showIcon = true,
        public string $icon = 'password-icon',
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.password-input');
    }
}
