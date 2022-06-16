<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/auth_login', [AuthController::class,'auth_login'])->name('auth_login');

Route::get('/home', function(){
    return view('pages.home');
});

Route::prefix('home/adminer')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    });
    Route::get('/operator', [AuthController::class, 'operator'])->name('operator');
    Route::get('/operator_create', [AuthController::class, 'operator_create'])->name('operator_create');
    Route::get('/operator_store', [AuthController::class, 'operator_store'])->name('operator_store');
});

