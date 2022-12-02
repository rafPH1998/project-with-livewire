<?php

use App\Http\Livewire\ShowTweets;
use App\Http\Livewire\User\UploadPhoto;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    Route::get('/tweets', ShowTweets::class)->name('tweets.index');
    Route::get('/upload', UploadPhoto::class)->name('upload.photo.user');
});


require __DIR__.'/auth.php';
 