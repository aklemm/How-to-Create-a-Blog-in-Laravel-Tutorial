<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FallbackController;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;

// Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [PostController::class, 'show'])->name('blog.show');

// Route::get('/blog/create', [PostController::class, 'create'])->name('blog.create');
// Route::post('/blog/', [PostController::class, 'store'])->name('blog.store');

// Route::get('/blog/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [PostController::class, 'update'])->name('blog.update');

// Route::delete('/blog/{id}', [PostController::class, 'destroy'])->name('blog.destroy');

Route::prefix('/blog')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::get('/', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    Route::post('/', [PostController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');
});
//Route::resource('/blog', PostController::class);

//Route::match(['GET', 'POST'], 'blog', [PostController::class, 'index']);

//Route::any('blog', [PostController::class, 'index']);
Route::get('/', HomeController::class);

//Route::view('blog', 'blog.index', ['name' => 'Code with Dary']);

Route::fallback(FallbackController::class);
