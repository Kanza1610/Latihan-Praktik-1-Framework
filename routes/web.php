<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [Homecontroller::class, 'index'])->name('Home');

