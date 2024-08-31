<?php

namespace App\View\Components\Rmntor;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $menuGroups,
    ) {/** */}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rmntor.layout-sidebar');
    }
}
