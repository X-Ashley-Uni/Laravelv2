<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
use App\Models\Product;

Route::get('/', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/user', [UserController::class, 'users'])->middleware('auth');
Route::post('/store', [UserController::class, 'store']);
Route::get('delete/{id}', [CustomerController::class, 'delete']);
Route::get('/edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
//adding customer
Route::get('/addCustomer', [CustomerController::class, 'addCustomer'])->middleware('auth');
//for saving customer
Route::post('/saveCustomer', [CustomerController::class, 'saveCustomer']);
Route::post('/updateCustomer', [CustomerController::class, 'updateCustomer'])->middleware('auth');

//for products
Route::get('/indexProduct', [ProductController::class, 'indexProduct'])->middleware('auth');
Route::get('/addProduct', [ProductController::class, 'addProduct'])->middleware('auth');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::get('/delete/{id}', [ProductController::class, 'delete']);

Route::post('/saveProduct', [ProductController::class, 'saveProduct']);
Route::post('/updateProduct', [ProductController::class, 'updateProduct'])->middleware('auth');