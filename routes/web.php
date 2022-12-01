<?php

use App\Http\Livewire\ShowTweets;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {

    Route::get('/tweets', ShowTweets::class);
    
});

require __DIR__.'/auth.php';
