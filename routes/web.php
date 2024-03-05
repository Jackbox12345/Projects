<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
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


Route::group(['middleware' => ['web']], function () {
//login pages route
    Route::get('/',[userController::class, 'portfolio'])->name('portfolio');
    Route::get('/login',[userController::class, 'index'])->name('login');
    Route::post('/StoreLogin',[userController::class,'logins'])->name('logins');

 Route::middleware(['auth'])->group(function () {
//routes that require authentication 
    Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');
    Route::get('register',[userController::class,'register'])->name('register');
    Route::post('storeRegister',[userController::class,'storeRegister'])->name('storeRegister');
    Route::get('/logout',[userController::class,'logout'])->name('logout');
    Route::get('profile',[dashboardController::class,'profileIndex'])->name('profile');
    Route::get('finance',[dashboardController::class,'todoview'])->name('todoview');
    Route::get('members',[dashboardController::class,'membersindex'])->name('memberindex');
    
});

});