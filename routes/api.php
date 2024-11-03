<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardShuffleController;


Route::middleware(['api', 'cors'])->group(function () {
    Route::post('/shuffle/{player}', [CardShuffleController::class, 'distribute']);
    Route::get('/test', function () {
        return response()->json(['success' => true]);
    });
});