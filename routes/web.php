<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.partial.app');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.admin_home');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/home', function () {
//     return view('admin.admin_home');
// })->name('admin.home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/admin', function () {
    //     return view('admin.partial.app');
    // });
});



//Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/create/category', [CategoryController::class, 'create'])->name('category.create');
Route::post('/store/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/show/category/{id}', [CategoryController::class, 'edit'])->name('category.show');
Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/update/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


//Sub Category
Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('sub-category.index');
Route::get('/create/sub-category', [SubCategoryController::class, 'create'])->name('sub-category.create');
Route::post('/store/sub-category', [SubCategoryController::class, 'store'])->name('sub-category.store');
Route::get('/show/sub-category/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.show');
Route::get('/edit/sub-category/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
Route::put('/update/sub-category/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
Route::delete('/delete/sub-category/{id}', [SubCategoryController::class, 'destroy'])->name('sub-category.destroy');


//Posts
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/create/post', [PostController::class, 'create'])->name('post.create');
Route::post('/store/post', [PostController::class, 'store'])->name('post.store');
Route::get('/show/post/{id}', [PostController::class, 'edit'])->name('post.show');
Route::get('/edit/post/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/update/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/delete/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


// Frontend
// Route::get('/', fn() => view('frontend.home'));
// Route::get('/', function () {
//     return view('admin.partial.app');
// });

// // Admin
// Route::middleware(['auth'])
//     ->prefix('admin')
//     ->name('admin.')
//     ->group(function () {
//         Route::get('/dashboard', fn() => view('admin.dashboard'))
//             ->name('dashboard');
//     });

// Route::get('/admin', fn() => redirect()->route('admin.dashboard'));


require __DIR__ . '/auth.php';
