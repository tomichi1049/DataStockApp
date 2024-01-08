<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
    
Route::controller(PostController::class)->middleware(['auth'])->group(function(){

    Route::get('/posts/create', 'create')->name('create');
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::post('/posts/{post}', 'store')->name('comment');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::delete('/show/{post}', 'destroy')->name('delete');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::post('/categories/create', 'create')->name('create');
});

Route::controller(CommentController::class)->middleware(['auth'])->group(function(){
    Route::post('/posts/{post}', 'store');
    Route::get('/posts/{post}', 'store');
    Route::delete('/posts/{post}', 'destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
