<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
Auth::routes();

Route::group(['middleware' => 'auth'], function(){ 
    Route::get('/', [HomeController::class, 'index'])->name('home');

    # Accounts Routes
    Route::resource('/accounts', AccountsController::class);

    # Users Routes
    // Route::resource('/user', UserController::class);
    Route::group(['prefix' => 'user', 'as' => 'users.'], function(){
        Route::get('/deposit', [UserController::class, 'depositSlip'])->name('depositSlip');
        Route::patch('/deposit/deposit', [UserController::class, 'deposit'])->name('deposit');
        Route::get('/withdrawal', [UserController::class, 'withdrawal'])->name('withdrawal');
        Route::patch('/withdraw', [UserController::class, 'withdraw'])->name('withdraw');
    });
});
