<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DateInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'date',
        public string $label = 'Date',
        public string $class = '',
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.date-input');
    }
}
