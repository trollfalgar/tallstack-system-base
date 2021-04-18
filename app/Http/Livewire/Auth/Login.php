<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected $rules = [
        'email' => ['required', 'email', 'exists:users,email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password, 'inactive' => null], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }

        return redirect()->intended(route('home'));
    }

    public function render(): View
    {
        $title = __('Acessar sua conta');

        return view('livewire.auth.login', ['title' => $title])
            ->extends('layouts.auth', ['title' => $title]);
    }
}
