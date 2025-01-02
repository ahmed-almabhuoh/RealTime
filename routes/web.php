<?php

use App\Events\TestEvent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('auth', function () {
    // dd('WEB');
    Auth::login(User::first());
    // return redirect()->route('welcome');
    // dd(auth()->user());
})->name('login');

Route::get('fire', function () {
    // Broadcast(new TestEvent());
    // dd('Here');

    // broadcast(new TestEvent)->toOthers();
    event(new TestEvent);
});


Route::get('make-auth', function () {
    // $user = User::first();
    // dd();
    // Auth::login(User::first());
    // dd(auth()->user());
});
