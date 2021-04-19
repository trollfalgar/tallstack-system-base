<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Component;

class Reset extends Component
{
    public string $token = '';
    public array|null|string $email = '';
    public string $password = '';
    public string $passwordConfirmation = '';

    public function mount($token)
    {
        $this->email = request()->query('email', '');
        $this->token = $token;
    }

    public function resetPassword()
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $response = $this->broker()->reset(
            [
                'token' => $this->token,
                'email' => $this->email,
                'password' => $this->password
            ],
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));

                $this->guard()->login($user);
            }
        );

        if ($response == Password::PASSWORD_RESET) {
            session()->flash(trans($response));

            return redirect(route('home'));
        }

        $this->addError('email', trans($response));
    }

    public function broker(): PasswordBroker
    {
        return Password::broker();
    }

    protected function guard(): StatefulGuard
    {
        return Auth::guard();
    }

    public function render()
    {
        $title = __('Alterar Senha de Acesso');

        return view('livewire.auth.reset', ['title' => $title])
            ->extends('layouts.auth', ['title' => $title]);
    }
}
