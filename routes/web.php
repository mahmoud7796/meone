<?php

use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\LogoutController;
use App\Http\Controllers\Site\Auth\RegisterController;
use App\Http\Controllers\Site\Pages\HomeController;
use App\Http\Controllers\Site\Auth\VerifyEmailController;
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


############### Register ####################
Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/register', [RegisterController::class,'register'])->name('site.register');
    Route::match(['get','post'],'/register-create', [RegisterController::class,'create'])->name('site.register.create');
});
############### End Register ##################

############### Verify Email ####################
    Route::get('/verify-email/{token}',[VerifyEmailController::class,'verifyEmail'])->name('site.verifyEmail');
    Route::match(['get','post'],'/rster-create', [VerifyEmailController::class,'create'])->name('site.register.crsaeate');

############### End Verify Email ##################

############### Login ####################

Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/login', [LoginController::class,'login'])->name('site.login');
    Route::match(['get', 'post'], '/post-login', [LoginController::class,'postLogin'])->name('site.postLogin');
    Route::get('/forget-password', [registerController::class,'forgetPassword'])->name('site.forgetPassword');
});
############### End Login ####################

############### Login With Facebook ####################

    Route::get('/redirect/{service}', [LoginController::class,'redirect'])->name('facebook.redirect');
    Route::get('/callback/{service}', [LoginController::class,'callback'])->name('facebook.callback');

############### End Login With Facebook #################

############### Logout ####################
Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/logout', [LogoutController::class,'logout'])->name('site.logout');

});
############### End Logout ####################


############### Pages ####################

Route::group(['middleware'=>'guest:web'], function(){
    Route::get('/', [HomeController::class,'landingPage'])->name('landingPage');
});

Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/home', [HomeController::class,'home'])->name('site.home');

});

############### Contacts ####################

Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/home', [HomeController::class,'home'])->name('site.home');

});

############### End Contacts ####################

Route::get('/get-card', [App\Http\Controllers\HomeController::class, 'getCard'])->name('card');


