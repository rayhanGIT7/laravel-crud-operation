<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\Admin\PostController;





 Route::get('/', function () {
    return view('welcome');
});







Route::get('/dashboard', function () {
    return view('dashboard');
       })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/password', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







//category route

Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');


//subcategory route
Route::get('subcategory/indexs',[subcategoryController::class,'index'])->name('subcategory.indexs');
Route::get('subcategory/create',[subcategoryController::class,'create'])->name('subcategory.create');
Route::post('subcategory/store',[subcategoryController::class,'store'])->name('subcategory.store');
Route::get('subcategory/edit/{id}',[subcategoryController::class,'edit'])->name('subcategory.edit');
Route::put('subcategory/update/{id}',[subcategoryController::class,'update'])->name('subcategory.update');
Route::get('subcategory/destroy/{id}',[subcategoryController::class,'destroy'])->name('subcategory.destroy');


//post route

Route::get('post/index',[PostController::class,'index'])->name('post.index');
Route::get('post/create',[PostController::class,'create'])->name('post.create');
Route::post('post/store',[PostController::class,'store'])->name('post.store');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('post/destroy/{id}',[PostController::class,'destroy'])->name('post.destroy');
