<?php

use Illuminate\Support\Facades\Route;
use App\Models\Character;
use App\Http\Controllers\CharacterController;

Route::resource('characters', CharacterController::class);
Route::put('characters/{id}/restore', [CharacterController::class, 'restore'])->name('characters.restore');
Route::get('/', function () {
    return view('home');
});

