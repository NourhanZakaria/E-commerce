<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\CategoryController;
use App\http\Controllers\Auth\LoginController;
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

// Route::get('/products',[App\Http\Controllers\productController::class, 'showProducts'])->name("showProducts");
// Route::get('/about',[App\Http\Controllers\productController::class, 'about'])->name('about');
// Route::get('/contact',[App\Http\Controllers\productController::class, 'contact'])->name('contact');
// Route::get('/create',[App\Http\Controllers\productController::class, 'create'])->name('create');
// Route::get('/edit/{id}',[App\Http\Controllers\productController::class, 'edit'])->name('edit');
// Route::get('/delete/{id}',[App\Http\Controllers\productController::class, 'destroy'])->name('destroy');
// Route::get('/details/{id}',[App\Http\Controllers\productController::class, 'showDetails'])->name('show');
// Route::post('/update/{id}',[App\Http\Controllers\productController::class, 'update'])->name('update');
// Route::post('/products', [App\Http\Controllers\productController::class,'store'])->name('product.store');




Route::resource('products', productController::class);


################################Routes for categories


Route::resource('categories', App\Http\Controllers\CategoryController::class);



Route::get('/', function () {

    return to_route('login');

})->name('login');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
