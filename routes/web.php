<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.partial.app');
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
Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


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
