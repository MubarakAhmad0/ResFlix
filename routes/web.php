<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Models\Project;

Route::get('/', function () {
    return Inertia::render('WhoIsWatching', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('whoiswatching');

Route::get('/browse', function () {
    $projects = Project::all()->groupBy('category');
    return Inertia::render('BrowseProjects', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'projects' => $projects,
    ]);
})->name('browse');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('projects', App\Http\Controllers\ProjectController::class);
});

require __DIR__.'/auth.php';
