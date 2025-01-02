<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fire', function () {
    // Broadcast(new TestEvent());
    // dd('Here');

    // broadcast(new TestEvent)->toOthers();
    event(new TestEvent);
});
