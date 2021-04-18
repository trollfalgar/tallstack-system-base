<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Loading extends Component
{
    public function __construct(public string $classes = 'h-16 w-16')
    {
    }

    public function render(): View
    {
        return view('components.layout.loading');
    }
}
