<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Login\AuthenController;
use App\Http\Controllers\Login\MemberController;
use App\Http\Controllers\Login\AdminController as AdminLoginController;
//Hiển thị post
Route::get('/', [PostController::class , 'index'])->name('client.home');
Route::get('/blog', [PostController::class , 'blog'])->name('client.blog');
Route::get('/single/{id}', [PostController::class , 'single'])->name('client.single');
Route::get('/contact_us', [PostController::class , 'contact_us'])->name('client.contact_us');

Route::prefix('/admin')->group(function(){
//admin
Route::get('/dashboard', [AdminController::class , 'index'])->name('admin.dashboard');
Route::get('/posts', [AdminPostController::class , 'index'])->name('admin.posts.index');
//thêm
Route::get('/posts/create', [AdminPostController::class , 'create'])->name('admin.posts.create');
Route::post('/posts/store', [AdminPostController::class , 'store'])->name('admin.posts.store');
//sửa
Route::get('/posts/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/posts/update/{id}', [AdminPostController::class, 'update'])->name('admin.posts.update');
//xóa
Route::delete('admin/posts/{id}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
//Categories
Route::get('/categories', [AdminCategoryController::class , 'index'])->name('admin.categories.index');
//Thêm danh mục
Route::get('/categories/create', [AdminCategoryController::class , 'create'])->name('admin.categories.create');
Route::post('/categories/store', [AdminCategoryController::class , 'store'])->name('admin.categories.store');
//Sửa danh mục
Route::get('/categories/edit/{id}', [AdminCategoryController::class , 'edit'])->name('admin.categories.edit');
Route::put('/categories/update/{id}', [AdminCategoryController::class , 'update'])->name('admin.categories.update');
//Xóa
Route::delete('/categories/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.categories.destroy');
});

//Đăng nhập
Route::get('login', [AuthenController::class, 'showFromLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showFromRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class, 'logout'])->name('loguot');

Route::get('member', [MemberController::class, 'dashboard'])
    ->name('member.dashboard')
    ->middleware(['auth']);
Route::get('admin', [AdminLoginController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth']);
