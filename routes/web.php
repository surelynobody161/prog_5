<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function() {
    return view('about-us');
});

Route::get('/about-us', [AboutUsController::class, 'index']);
