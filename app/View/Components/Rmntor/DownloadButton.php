<?php

namespace App\View\Components\Rmntor;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DownloadButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
        public string $text = "Download",
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.download-button');
    }
}
