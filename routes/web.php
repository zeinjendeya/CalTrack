<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'dash'])->name('dash');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'register_ad'])->name('admin.register');
Route::post('/admin/create', [App\Http\Controllers\AdminController::class, 'make_admin'])->name('admin.create');
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/signin', [App\Http\Controllers\AdminController::class, 'signin'])->name('admin.signin');
Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

Auth::routes();

//admin routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'list_users'])->name('admin.users');
    Route::get('/admin/users/{user}/show', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.users.show');
    Route::delete('/admin/users/{user}/delete', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.users.delete');

    //blogs routes
    Route::get('/admin/blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('admin.blogs');
    Route::get('/admin/blogs/new', [App\Http\Controllers\BlogsController::class, 'add'])->name('admin.blogs.new');
    Route::post('/admin/blogs/create', [App\Http\Controllers\BlogsController::class, 'create'])->name('admin.blogs.create');
    Route::get('/admin/blogs/{blog}/edit', [App\Http\Controllers\BlogsController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/admin/blogs/{blog}/update', [App\Http\Controllers\BlogsController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/admin/blogs/{blog}/delete', [App\Http\Controllers\BlogsController::class, 'delete'])->name('admin.blogs.delete');

    //food routes
    Route::get('/admin/food', [App\Http\Controllers\FoodController::class, 'index'])->name('admin.food');
    Route::get('/admin/food/new', [App\Http\Controllers\FoodController::class, 'add'])->name('admin.food.new');
    Route::post('/admin/food/create', [App\Http\Controllers\FoodController::class, 'create'])->name('admin.food.create');
    Route::get('/admin/food/{food}/edit', [App\Http\Controllers\FoodController::class, 'edit'])->name('admin.food.edit');
    Route::post('/admin/food/{food}/update', [App\Http\Controllers\FoodController::class, 'update'])->name('admin.food.update');
    Route::delete('/admin/food/{food}/delete', [App\Http\Controllers\FoodController::class, 'delete'])->name('admin.food.delete');

    //exercise routes
    Route::get('/admin/exercise', [App\Http\Controllers\ExerciseController::class, 'index'])->name('admin.exercise');
    Route::get('/admin/exercise/new', [App\Http\Controllers\ExerciseController::class, 'add'])->name('admin.exercise.new');
    Route::post('/admin/exercise/create', [App\Http\Controllers\ExerciseController::class, 'create'])->name('admin.exercise.create');
    Route::get('/admin/exercise/{exercise}/edit', [App\Http\Controllers\ExerciseController::class, 'edit'])->name('admin.exercise.edit');
    Route::post('/admin/exercise/{exercise}/update', [App\Http\Controllers\ExerciseController::class, 'update'])->name('admin.exercise.update');
    Route::delete('/admin/exercise/{exercise}/delete', [App\Http\Controllers\ExerciseController::class, 'delete'])->name('admin.exercise.delete');
});


Route::group(['middleware' => ['web', 'auth']], function () {
    //progress
    Route::get('/{user}/progress', [App\Http\Controllers\HomeController::class, 'progress'])->name('progress');
    
    //profile routes
    Route::get('/profile/{user}', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::get('/profile/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
    
    //food user routes
    Route::get('/{user}/food', [App\Http\Controllers\UserController::class, 'list_food'])->name('food');
    Route::get('/{user}/food/amount', [App\Http\Controllers\UserController::class, 'add_amounts'])->name('food.amount');
    Route::post('/{user}/food/process', [App\Http\Controllers\UserController::class, 'food_process'])->name('food.process');
    
    //exercise user routes
    Route::get('/{user}/exercise', [App\Http\Controllers\UserController::class, 'list_exercise'])->name('exercise');
    Route::get('/{user}/exercise/time', [App\Http\Controllers\UserController::class, 'add_time'])->name('exercise.amount');
    Route::post('/{user}/exercise/process', [App\Http\Controllers\UserController::class, 'exercise_process'])->name('exercise.process');
});
