<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;

Route::get('/', [Homecontroller::class, 'index'])->name('Home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin-page/table-datatable', [AdminController::class, 'datatable'])->name('admin.datatable');
Route::get('/admin-page/ecommerce-products-grid', [AdminController::class, 'products'])->name('admin.products');
Route::get('/admin-page/charts-apex-chart', [AdminController::class, 'charts'])->name('admin.charts');
Route::get('/admin-page/{page}', [AdminController::class, 'page'])
    ->where('page', '[a-z0-9-]+')->name('admin.page');
