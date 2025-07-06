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
    $imagePaths = [
        '/images/asds.jpeg',
        '/images/images.jpeg',
        '/images/maxresdefault.jpg',
        '/images/Untitled.jpeg',
        '/images/placeholder.jpg',
    ];

    $placeholderProjects = [
        'Popular on Netflix' => [
            ['id' => 1, 'title' => 'Project Alpha', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
            ['id' => 2, 'title' => 'Project Beta', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
            ['id' => 3, 'title' => 'Project Gamma', 'thumbnail_url' => $imagePaths[2], 'details_link' => '#'],
            ['id' => 4, 'title' => 'Project Delta', 'thumbnail_url' => $imagePaths[3], 'details_link' => '#'],
            ['id' => 5, 'title' => 'Project Epsilon', 'thumbnail_url' => $imagePaths[4], 'details_link' => '#'],
            ['id' => 6, 'title' => 'Project Zeta', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
        ],
        'Trending Now' => [
            ['id' => 7, 'title' => 'Project Eta', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
            ['id' => 8, 'title' => 'Project Theta', 'thumbnail_url' => $imagePaths[2], 'details_link' => '#'],
            ['id' => 9, 'title' => 'Project Iota', 'thumbnail_url' => $imagePaths[3], 'details_link' => '#'],
        ],
        'TV Shows' => [
            ['id' => 10, 'title' => 'Project Kappa', 'thumbnail_url' => $imagePaths[4], 'details_link' => '#'],
            ['id' => 11, 'title' => 'Project Lambda', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
            ['id' => 12, 'title' => 'Project Mu', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
        ],
        'all' => [
            ['id' => 1, 'title' => 'Project Alpha', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
            ['id' => 2, 'title' => 'Project Beta', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
            ['id' => 3, 'title' => 'Project Gamma', 'thumbnail_url' => $imagePaths[2], 'details_link' => '#'],
            ['id' => 4, 'title' => 'Project Delta', 'thumbnail_url' => $imagePaths[3], 'details_link' => '#'],
            ['id' => 5, 'title' => 'Project Epsilon', 'thumbnail_url' => $imagePaths[4], 'details_link' => '#'],
            ['id' => 6, 'title' => 'Project Zeta', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
            ['id' => 7, 'title' => 'Project Eta', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
            ['id' => 8, 'title' => 'Project Theta', 'thumbnail_url' => $imagePaths[2], 'details_link' => '#'],
            ['id' => 9, 'title' => 'Project Iota', 'thumbnail_url' => $imagePaths[3], 'details_link' => '#'],
            ['id' => 10, 'title' => 'Project Kappa', 'thumbnail_url' => $imagePaths[4], 'details_link' => '#'],
            ['id' => 11, 'title' => 'Project Lambda', 'thumbnail_url' => $imagePaths[0], 'details_link' => '#'],
            ['id' => 12, 'title' => 'Project Mu', 'thumbnail_url' => $imagePaths[1], 'details_link' => '#'],
        ],
    ];

    return Inertia::render('BrowseProjects', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'projects' => $placeholderProjects,
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
