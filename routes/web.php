<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\{

    // Site
    Site\Home\SiteHomeLivewire,
    Site\Question\SiteQuestionLivewire,

    // Panel
    Panel\Dashboard\DashboardLivewire,
};

// Site
Route::get('/', SiteHomeLivewire::class)->name('site.home');
Route::get('{id}/{username}/{subject}', SiteQuestionLivewire::class)->name('user.post');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Panel
    Route::get('/dashboard', DashboardLivewire::class)->name('dashboard');

});
