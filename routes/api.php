<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/series', function () {
    // Placeholder for series data
    return response()->json([
        ['title' => 'Example Series 1', 'backdrop_path' => 'images/placeholder.jpg', 'overview' => 'This is a placeholder overview for example series 1.'],
        ['title' => 'Example Series 2', 'backdrop_path' => 'images/placeholder.jpg', 'overview' => 'This is a placeholder overview for example series 2.'],
    ]);
});

Route::get('/genre/{genre}', function ($genre) {
    // Placeholder for genre data
    return response()->json([
        ['id' => 1, 'title' => 'Movie 1', 'poster_url' => 'images/placeholder.jpg'],
        ['id' => 2, 'title' => 'Movie 2', 'poster_url' => 'images/placeholder.jpg'],
    ]);
});
