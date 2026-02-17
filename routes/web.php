<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\{
    Site\Home\SiteHomeLivewire,
    Site\Question\SiteQuestionLivewire,
};

// Site - Home
Route::get('/', SiteHomeLivewire::class)->name('site.home');
Route::get('/{username}/{subject}', SiteQuestionLivewire::class)->name('user.post');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
