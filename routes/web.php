<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', function () {
    return view('show');
});
    route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
    route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//route sécurisée pour la création de post
    Route::middleware('auth')->group(function () {  
        Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
        Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
        route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
        route::post('/comments/{post}/', [CommentController::class, 'store'])->name('comments.store');
          
    });

require __DIR__.'/auth.php';
