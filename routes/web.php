<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Front-end
Route::get('/', [HomeController::class, 'show']);

Route::get('/trang-chu', [HomeController::class, 'show']);




// Back-end
Route::get('/admin', [AdminController::class, 'showLogin']);

Route::get('/dashboard', [AdminController::class, 'showDashboard']);

Route::post('/admin-login', [AdminController::class, 'loginAdmin']);

Route::get('/admin-logout', [AdminController::class, 'logoutAdmin']);

Route::get('/add-category-product', [AdminController::class, 'showAddCategoryProduct']);

Route::get('/all-category-product', [AdminController::class, 'showAllCategoryProduct']);

Route::post('/save-category-product', [AdminController::class, 'saveCategoryProduct']);