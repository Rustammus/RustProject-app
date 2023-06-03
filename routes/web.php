<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'AdminPost', 'middleware' => ['auth','admin']], function () {
    Route::get('/admin/post', [\App\Http\Controllers\PostController::class, 'index'])->name('admin.post.index');
    Route::get('/admin/post/create', [\App\Http\Controllers\PostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post', [\App\Http\Controllers\PostController::class, 'store'])->name("admin.post.store");
    Route::get('/admin/post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name("admin.post.show");
    Route::get('/admin/post/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name("admin.post.edit");
    Route::patch('/admin/post/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name("admin.post.update");
    Route::delete('/admin/post/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name("admin.post.destroy");
});

Route::group(['namespace' => 'AdminUser', 'middleware' => ['auth','admin']], function (){
    Route::get('/admin/user', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.user.index');
    Route::get('/admin/user/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name("admin.user.show");
    Route::get('/admin/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name("admin.user.edit");
    Route::patch('/admin/user/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name("admin.user.update");
    Route::delete('/admin/user/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name("admin.user.destroy");
});

Route::get('/main/post/create', [\App\Http\Controllers\UserPostController::class, 'create'])->middleware(['auth', 'manager'])->name('main.post.create');
Route::get('/main/post', [\App\Http\Controllers\UserPostController::class, 'index'])->name('main.index');
Route::post('/main/post', [\App\Http\Controllers\UserPostController::class, 'store'])->middleware(['auth', 'manager'])->name('main.post.store');
Route::post('/main/post/filter', [\App\Http\Controllers\UserPostController::class, 'filter'])->name('main.filter');
//Route::get("/home", [\App\Http\Controllers\HomeController::class, "index"]);
Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

