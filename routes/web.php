<?php

use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\LogoutController;
use App\Http\Controllers\Site\Auth\RegisterController;
use App\Http\Controllers\Site\Pages\HomeController;
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

############### Login ####################

Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/login', [LoginController::class,'login'])->name('site.login');
    Route::match(['get', 'post'], '/post-login', [LoginController::class,'postLogin'])->name('site.postLogin');
    Route::get('/forget-password', [registerController::class,'forgetPassword'])->name('site.forgetPassword');
});
############### End Login ####################

############### Login ####################

    Route::get('/redirect/{service}', [LoginController::class,'redirect'])->name('facebook.redirect');
    Route::get('/callback/{service}', [LoginController::class,'callback'])->name('facebook.callback');

############### End Login ####################

############### Logout ####################
Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/logout', [LogoutController::class,'logout'])->name('site.logout');

});
############### End Logout ####################

############### Register ####################
Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/register', [registerController::class,'register'])->name('site.register');
    Route::match(['get','post'],'/register-create', [registerController::class,'create'])->name('site.register.create');
});
############### End Register ####################

############### Pages ####################
Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/', [HomeController::class,'landingPage'])->name('landingPage');
});

Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/home', [HomeController::class,'home'])->name('site.home');
});
############### End Pages ####################

Route::get('/get-card', [App\Http\Controllers\HomeController::class, 'getCard'])->name('card');
