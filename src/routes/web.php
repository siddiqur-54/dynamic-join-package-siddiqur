<?php

use Illuminate\Support\Facades\Route;
use Siddiqur\DynamicJoin\Http\Controllers\ProductController;
use Siddiqur\DynamicJoin\Http\Controllers\CustomerController;
use Siddiqur\DynamicJoin\Http\Controllers\DynamicDependentController;
use Siddiqur\DynamicJoin\Http\Controllers\AutomaticController;
use Siddiqur\DynamicJoin\Http\Controllers\JoinController;
use Siddiqur\DynamicJoin\Http\Controllers\ReportController;
use Siddiqur\DynamicJoin\Http\Controllers\ViewReportListController;


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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');

Route::get('/dynamicview', [DynamicDependentController::class, 'index'])->name('dynamicInfoViewer.index');
Route::post('/dynamicview/fetch', [DynamicDependentController::class, 'fetch'])->name('dynamicInfoViewer.fetch');
Route::post('/dynamicview/fetch_datas', [DynamicDependentController::class, 'fetch_datas'])->name('dynamicInfoViewer.fetch_datas');

Route::get('/automatic', [AutomaticController::class, 'index'])->name('automatic.index');
Route::post('/automatic/fetch', [AutomaticController::class, 'fetch'])->name('automatic.fetch');
Route::post('/automatic/fetch_datas', [AutomaticController::class, 'fetch_datas'])->name('automatic.fetch_datas');

Route::get('/join', [JoinController::class, 'index'])->name('adminViewCreate.index');
Route::post('/join/fetch', [JoinController::class, 'fetch'])->name('adminViewCreate.fetch');
Route::post('/join/fetch_datas', [JoinController::class, 'fetch_datas'])->name('adminViewCreate.fetch_datas');
Route::post('/join/fetch_join_datas', [JoinController::class, 'fetch_join_datas'])->name('adminViewCreate.fetch_join_datas');
Route::post('/join', [JoinController::class, 'processForm'])->name('adminViewCreate.processForm');

// Route::Resource('/view-report', ReportController::class);
Route::get('/view-report/{id}', [ReportController::class, 'showData'])->name('viewReport.index');
Route::get('/view-report/{id}/delete', [ReportController::class, 'destroy']);
Route::get('/view-report/{id}/edit', [ReportController::class, 'edit'])->name('adminViewCreate.edit');
Route::post('/view-report/edit/fetch', [JoinController::class, 'fetch'])->name('adminViewCreate.fetch');

Route::get('/view-report-list', [ViewReportListController::class, 'index']);


