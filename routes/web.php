<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\SubjectController;
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
        Route::group(['prefix' => 'admin'], function () {
            Route::get('/list', [AdminController::class, 'list']);
            Route::get('/add', [AdminController::class, 'add']);
            Route::post('/add', [AdminController::class, 'insert']);
            Route::get('/edit/{id}', [AdminController::class, 'edit']);
            Route::post('/edit/{id}', [AdminController::class, 'update']);
            Route::get('/delete/{id}', [AdminController::class, 'delete']);
        });
        Route::group(['prefix' => 'class'], function () {
            Route::get('/list', [ClassController::class, 'list']);
            Route::get('/add', [ClassController::class, 'add']);
            Route::post('/add', [ClassController::class, 'insert']);
            Route::get('/edit/{id}', [ClassController::class, 'edit']);
            Route::post('/edit/{id}', [ClassController::class, 'update']);
            Route::get('/delete/{id}', [ClassController::class, 'delete']);
        });
        Route::group(['prefix' => 'subject'], function () {
            Route::get('/list', [SubjectController::class, 'list']);
            Route::get('/add', [SubjectController::class, 'add']);
            Route::post('/add', [SubjectController::class, 'insert']);
            Route::get('/edit/{id}', [SubjectController::class, 'edit']);
            Route::post('/edit/{id}', [SubjectController::class, 'update']);
            Route::get('/delete/{id}', [SubjectController::class, 'delete']);
        });
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
