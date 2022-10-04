<?php

use App\Http\Controllers\OrderController;
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
    return view('welcome');
});



Route::get('orderAdd', [OrderController::class, 'orderAdd'])->name('orders.orderAdd');
Route::post('order/store', [OrderController::class, 'storeOrder'])->name('orders.storeOrder');
Route::get('order/{id}/delete', [OrderController::class, 'destroy'])->name('orders.delete');
Route::get('orderList', [OrderController::class, 'orderList'])->name('orders.allOrder');
Route::get('orderEdit/{id}', [OrderController::class, 'orderEdit'])->name('orders.edit');
Route::patch('order/update/{id}', [OrderController::class, 'update'])->name('orders.update');
