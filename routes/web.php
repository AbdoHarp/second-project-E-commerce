<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\CartController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [FrontendHomeController::class, 'index']);

Route::get('/collections', [FrontendHomeController::class, 'categories']);
Route::get('/collections/{slug}', [FrontendHomeController::class, 'viewcategories']);
Route::get('/collections/{slug}/{prod_slug}', [FrontendHomeController::class, 'viewproduct']);


Route::post('/add-to-cart', [CartController::class, 'addproduct']);
Route::post('/delete-cart-item', [CartController::class, 'deleteproduct']);
Route::post('/update-cart', [CartController::class, 'updatecart']);

Route::middleware('auth')->group(function () {
    Route::get('/carts', [CartController::class, 'viewcart']);
});



// Route::middleware('auth')->group(function () {
//     // Route::get('/dashboard', [DashboardController::class, 'index']);
// });

Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {
    //Route for dashboard show
    Route::get('/dashboard', [FrontendController::class, 'index']);

    // Route for categories 
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('add-categories', [CategoryController::class, 'add']);
    Route::post('insert-categories', [CategoryController::class, 'insert']);
    Route::get('edit-categories/{category_id}/edit', [CategoryController::class, 'edit']);
    Route::put('update-categories/{category_id}', [CategoryController::class, 'update']);
    Route::get('delete-categories/{category_id}/delete', [CategoryController::class, 'destroy']);

    // Route for products 
    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-products', [ProductController::class, 'insert']);
    Route::get('edit-products/{product_id}/edit', [ProductController::class, 'edit']);
    Route::put('update-products/{product_id}', [ProductController::class, 'update']);
    Route::get('delete-products/{product_id}/delete', [ProductController::class, 'destroy']);

    // Route users
    Route::get('users', [UsersController::class, 'index']);
    Route::get('add-users', [UsersController::class, 'create']);
    Route::post('add-users', [UsersController::class, 'store']);
    Route::get('edit-users/{user_id}/edit', [UsersController::class, 'edit']);
    Route::put('edit-users/{user_id}', [UsersController::class, 'update']);
    Route::get('delete-users/{user_id}/delete', [UsersController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
