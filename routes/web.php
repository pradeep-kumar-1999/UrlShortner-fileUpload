<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\linkcontroller;
use App\Http\Controllers\FileController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/show',[AuthController::class,'show'])->name('show');
    Route::delete('/delete/{id}',[AuthController::class,'delete'])->name('delete');
    Route::post('/update/{id}',[AuthController::class,'update'])->name('update');
    Route::get('/update/{id}',[AuthController::class,'updateshow'])->name('updateshow');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    route::get('/url',[linkcontroller::class,'showUrl'])->name('showUrl');
    route::post('/make',[linkcontroller::class,'make'])->name('makeUrl');
    Route::get('/gen/{str}',[linkcontroller::class,'redirectUrl'])->name('redirectUrl');
    Route::get('/deleteUrl/{id}',[linkcontroller::class,'deleteUrl'])->name('deleteUrl');

    route::get('/file',[FileController::class,'file'])->name('file');
    route::post('/store',[FileController::class,'store'])->name('store');
    Route::get('/download/{id}',[FileController::class,'download'])->name('download');
    Route::get('/deletefile/{id}',[FileController::class,'deletefile'])->name('deletefile');

});

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AuthController::class,'loginShow'])->name('loginShow');
    Route::post('/login',[AuthController::class,'login'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/save',[AuthController::class,'save'])->name('save');

});
