<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $placeholder = 'Jl. Jalan',
        public string $name = 'textarea',
        public string $label = 'Textarea',
        public string $class = '',
        public bool $showIcon = true,
        public string $icon = 'letter-icon',
        public string $rows = "6",
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.textarea');
    }
}
