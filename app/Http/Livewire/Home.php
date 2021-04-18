<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $title = __('Dashboard');

        return view('livewire.home', ['title' => $title])
            ->extends('layouts.app', ['title' => $title]);
    }
}
