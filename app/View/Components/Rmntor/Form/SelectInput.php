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
        public string $name = "option",
        public string $label = "Select",
        public array $options = [
                [
                    'name' => "Option 1",
                    'slug' => "option-1",
                ],
                [
                    'name' => "Option 2",
                    'slug' => "option-2",
                ],
                [
                    'name' => "Option 3",
                    'slug' => "option-3",
                ],
                [
                    'name' => "Option 4",
                    'slug' => "option-4",
                ],
                [
                    'name' => "Option 5",
                    'slug' => "option-5",
                ],
                [
                    'name' => "Option 6",
                    'slug' => "option-6",
                ],
            ],
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.select-input');
    }
}
