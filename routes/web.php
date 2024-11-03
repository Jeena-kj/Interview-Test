<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardShuffleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shuffle/{player}', [CardShuffleController::class, 'distribute']);