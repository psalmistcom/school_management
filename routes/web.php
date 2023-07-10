<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/forgot-password', [AuthController::class, 'postForgotPassword']);
Route::get('/reset/{token}', [AuthController::class, 'reset']);
Route::post('/reset/{token}', [AuthController::class, 'postResetPassword']);


// Admin Routes 
Route::group(['middleware' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
        Route::get('/admin/list', [AdminController::class, 'list']);
        Route::get('/admin/add', [AdminController::class, 'add']);
        Route::post('/admin/add', [AdminController::class, 'insert']);
        Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
        Route::post('/admin/edit/{id}', [AdminController::class, 'update']);
        Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);
    });
});

//Teacher Routes
Route::group(['middleware' => 'teacher'], function () {
    Route::group(['prefix' => 'teacher'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    });
});

// Student Route 
Route::group(['middleware' => 'student'], function () {
    Route::group(['prefix' => 'student'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    });
});

// Parent Route 
Route::group(['middleware' => 'parent'], function () {
    Route::group(['prefix' => 'parent'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    });
});
