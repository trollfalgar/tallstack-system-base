<?php

namespace App\View\Components\Input;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    public function __construct(
        public string $model,
        public string $type = 'text',
        public string $requestType = 'lazy',
        public bool $showLabel = true,
        public string $labelText = '',
        public bool $isDisabled = false,
        public bool $isRequired = false,
        public bool $isReadonly = false,
        public bool $isAutofocus = false,
        public string $autocomplete = 'off')
    {
    }

    public function render(): View
    {
        return view('components.input.text');
    }
}
