<?php

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hyperlink extends Component
{
    public function __construct(
        public string $url,
        public string $text,
        public string $classes = '')
    {
    }

    public function render(): View
    {
        return view('components.layout.hyperlink');
    }
}
