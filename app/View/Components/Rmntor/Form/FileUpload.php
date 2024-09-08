<?php

namespace App\View\Components\Rmntor\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = 'file',
        public string $class = '',
    )
    {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.form.file-upload');
    }
}
