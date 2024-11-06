<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Contacts\Index as ContactsIndex;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', ContactsIndex::class)->name('contacts.index');
    });

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
