<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'login'])->name('login');
Route::post('/auth', [AdminController::class, 'auth'])->name('auth');

Route::middleware(['isLogin', 'cekRole:admin'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin-product', [AdminController::class, 'admin_product'])->name('admin-product');
    Route::get('/new-product', [AdminController::class, 'admin_create_product'])->name('admin-create-product');
    Route::post('/create-product', [AdminController::class, 'create_product'])->name('create-product');
    Route::get('/edit-product/{id}', [AdminController::class, 'edit_product'])->name('edit-product');
    Route::patch('/update-product/{id}', [AdminController::class, 'update_product'])->name('update-product');
    Route::patch('/update-stock/{id}', [AdminController::class, 'update_stock'])->name('update-stock');
    Route::delete('/delete-product/{id}', [AdminController::class, 'delete_product'])->name('delete-product');
    Route::get('/admin-transaction', [AdminController::class, 'admin_transaction'])->name('admin-transaction');
    Route::get('/add-user', [AdminController::class, 'add_users'])->name('add-users');
    Route::post('/register', [AdminController::class, 'register'])->name('register');
    Route::get('/edit/{id}', [AdminController::class, 'edit_user'])->name('edit');
    Route::patch('/update-user/{id}', [AdminController::class, 'update_user'])->name('update-user');
    Route::delete('/delete-user/{id}', [AdminController::class, 'delete_user'])->name('delete-user');
});
Route::get('/admin-users', [AdminController::class, 'users'])->name('admin-users');

Route::middleware(['isLogin', 'cekRole:cashier'])->group(function(){
    Route::get('/cashier', [AdminController::class, 'cashier'])->name('cashier');
    Route::get('/cashier-products', [AdminController::class, 'cashier_products'])->name('cashier-products');
});

Route::middleware(['isLogin', 'cekRole:admin,cashier'])->group(function(){
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});


Route::get('/cashier-transaction', function () {
    return view('cashier.transaction');
});

Route::get('/cashier-add', function () {
    return view('cashier.add');
});

Route::get('/cashier-create', function () {
    return view('cashier.create');
});

