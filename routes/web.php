<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\{
    Site\Home\SiteHomeLivewire,
};

// Site - Home
Route::get('/', SiteHomeLivewire::class)->name('site.home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
