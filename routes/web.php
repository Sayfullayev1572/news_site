<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('/lang/{lang}', function ($lang) {
    session(['lang'=>$lang]);
    return back();
});

Route::get('/', [MainController::class, 'index']);
Route::get('/category/{slug}', [MainController::class, 'categoryPosts'])->name('categoryPosts');
Route::get('/posts/{slug}', [MainController::class, 'postDetail'])->name('postDetail');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'sendMail'])->name('sendMail');
Route::get('/search', [MainController::class, 'search'])->name('search');


Route::prefix('admin')->middleware(['auth', 'verified'])->name('admin.')->group(function(){
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::resource('posts', PostsController::class);
    Route::post('/post-image-upload', [PostsController::class, 'upload'])->name('upload');
    Route::resource('tags', TagsController::class);
    Route::resource('ads', AdsController::class);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('users', UsersController::class);
        Route::resource('roles', RolesController::class);
        Route::resource('permission', PermissionController::class);
    });


});


Route::middleware('auth')->name('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
