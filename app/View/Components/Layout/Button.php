<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $text,
        public string $type = 'button',
        public string $classes = '')
    {
    }

    public function render(): View
    {
        return view('components.layout.button');
    }
}
