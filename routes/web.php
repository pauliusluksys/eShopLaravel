<?php

use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Admin\Categories\CategoryList;

use App\Http\Livewire\Admin\Products\ProductList;
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
    return view('guest.landingPage');
});

Route::name('admin.')->group(function () {
    //Route::resource('categories', CategoryController::class);
    Route::get('categories',CategoryList::class)->name('categories');
    Route::get('products',ProductList::class)->name('products');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
