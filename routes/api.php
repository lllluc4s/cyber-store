<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\AdminProductControllerApi;
use App\Http\Controllers\api\FormularioControllerApi;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rotas comuns
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

//---------------------------------------------------

// Rotas admin
Route::get('/admin/products', [AdminProductControllerApi::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductControllerApi::class, 'create'])->name('admin.products.create');
Route::post('/admin/formulario', [FormularioControllerApi::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{product}/edit', [AdminProductControllerApi::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminProductControllerApi::class, 'update'])->name('admin.products.update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
