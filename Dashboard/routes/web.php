<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
// Route::group(['prefix' =>'dashboard','as'=>'dashboard'], function (){
//     Route::get('/',DashboardController::class);
//     Route::prefix('products')->controller(ProductController::class)->name('.products.')->group(function(){
//     Route::get('/create','create')->name('create');
//     Route::get('/','index')->name('index');
//     Route::get('/{id}/edit','edit')->name('edit');
//     Route::post('/store','store')->name('store');
//     Route::put('//{id}/update','update')->name('update');
//     Route::delete('//{id}destroy','destroy')->name('destroy');
//     });
  
//     });



Route::get('dasboard',DashboardController::class)->name('dashboard');
Route::get('dasboard/products/create',[ProductController::class,'create'])->name('dashboard.products.create');
Route::get('dasboard/products',[ProductController::class,'index'])->name('dashboard.products.index');
Route::get('dasboard/products/{id}/edit',[ProductController::class,'edit'])->name('dashboard.products.edit');
Route::post('dashboard/products/store',[ProductController::class,'store'])->name('dashboard.products.store');
Route::put('dashboard/products//{id}update',[ProductController::class,'update'])->name('dashboard.products.update');
Route::delete('dashboard/products//{id}destroy',[ProductController::class,'destroy'])->name('dashboard.products.destroy');
Route::patch('dashboard/products//{id}togStatus',[ProductController::class,'togStatus'])->name('dashboard.products.togStatus');