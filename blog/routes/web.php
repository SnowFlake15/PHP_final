<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('none')->middleware('auth');
//    ->name('none')->middleware(\App\Http\Middleware\TestMiddleware::class);
//Route::get('/posts',[\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/posts/',[\App\Http\Controllers\PostController::class, 'index']);
//Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'show']);
//Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
//Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class, 'save'])->name('posts.save');
//Route::get('/post/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
//Route::delete('/posts/{post}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');
//Route::put('/post/{post}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/post_login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post.login');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get("/register", [\App\http\Controllers\LoginController::class, 'register'] )->name('register');
Route::post('/save_user', [\App\Http\Controllers\LoginController::class, 'save_user'])->name('save_user');
Route::get('/my_posts', [\App\Http\Controllers\LoginController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/posts/',[\App\Http\Controllers\PostController::class, 'index']);
    Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
    Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts');;
    Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class, 'save'])->name('posts.save');
    Route::get('/post/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
    Route::put('/post/{post}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');
//    Route::delete('/posts/delete/{post}', [\App\Http\Controllers\PostController::class, 'delete'])->name('destroy');
});
Route::post('posts/{post}/approve', [\App\Http\Controllers\PostController::class, 'approve'])->name('approve');
Route::get('/email/create', [\App\Http\Controllers\MailController::class, 'create'])->name('mail.create');
Route::post('/email/send', [\App\Http\Controllers\MailController::class, 'send'])->name('mail.send');
