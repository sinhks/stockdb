<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdertController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\InventoryController;
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
    return view('child.home');
})->name('home');

// category
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// supplier
Route::get('suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::put('/suppliers/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

// product
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// customer
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

// order
Route::get('orders/create', [OrdertController::class, 'create'])->name('orders.create');
Route::post('orders', [OrdertController::class, 'store'])->name('orders.store');
Route::get('/orders', [OrdertController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}/edit', [OrdertController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{id}', [OrdertController::class, 'update'])->name('orders.update');
Route::delete('/orders/{id}', [OrdertController::class, 'destroy'])->name('orders.destroy');

// order item
Route::get('orderitems/create', [OrderItemController::class, 'create'])->name('orderitems.create');
Route::post('orderitems', [OrderItemController::class, 'store'])->name('orderitems.store');
Route::get('/orderitems', [OrderItemController::class, 'index'])->name('orderitems.index');
Route::get('/orderitems/{id}/edit', [OrderItemController::class, 'edit'])->name('orderitems.edit');
Route::put('/orderitems/{id}', [OrderItemController::class, 'update'])->name('orderitems.update');
Route::delete('/orderitems/{id}', [OrderItemController::class, 'destroy'])->name('orderitems.destroy');


// shopping card
Route::get('shopping/create', [ShoppingController::class, 'create'])->name('shopping.create');
Route::post('shopping', [ShoppingController::class, 'store'])->name('shopping.store');


// inventory
Route::get('inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
Route::post('inventories', [InventoryController::class, 'store'])->name('inventories.store');
Route::get('/inventories', [InventoryController::class, 'index'])->name('inventories.index');
Route::get('/inventories/{id}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
Route::put('/inventories/{id}', [InventoryController::class, 'update'])->name('inventories.update');
Route::delete('/inventories/{id}', [InventoryController::class, 'destroy'])->name('inventories.destroy');