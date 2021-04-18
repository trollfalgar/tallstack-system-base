<?php

use App\Http\Livewire\Auth\Email;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Reset;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('senha/resetar', Email::class)->name('password.request');
    Route::get('senha/resetar/{token}', Reset::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('index');
    Route::get('/home', Home::class)->name('home');

    Route::get('logout', function () {
        Auth::logout();

        return redirect(route('home'));
    })->name('logout');
});