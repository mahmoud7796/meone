<?php

use App\Http\Controllers\Site\Auth\LoginController;
use App\Http\Controllers\Site\Auth\LogoutController;
use App\Http\Controllers\Site\Auth\RegisterController;
use App\Http\Controllers\Site\Pages\CardController;
use App\Http\Controllers\Site\Pages\ContactController;
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
    Route::get('/home', [HomeController::class,'home'])->name('home');
    Route::get('/contact', [ContactController::class,'getUserContact'])->name('site.contact.getUserContact');

});

############### Contacts ####################

Route::group(['middleware'=>'auth:web'], function(){
    Route::post('/contact-store', [ContactController::class,'sotreInSession'])->name('site.contacts.sotreInSession');
    Route::get('/contact-remove', [ContactController::class,'removeFromSession'])->name('site.contacts.removeFromSession');
    Route::post('/contact-create', [ContactController::class,'create'])->name('site.contacts.create');
    Route::get('/contact-edit/{id}', [ContactController::class,'edit'])->name('site.contacts.getContact');
    Route::post('/contact-update/{id}', [ContactController::class,'update'])->name('site.contacts.update');
    Route::get('/contact-delete/{id}', [ContactController::class,'delete'])->name('site.contacts.delete');
});

############### End Contacts ####################

############### Cards ####################

Route::group(['middleware'=>'auth:web'], function(){
    Route::post('/card-store', [CardController::class,'store'])->name('site.card.create');
    Route::get('/card-edit/{id}', [CardController::class,'edit'])->name('site.card.edit');
});

############### End Cards ####################

############### Providers ####################

Route::group(['middleware'=>'auth:web'], function(){
   // Route::get('/all-providers', [HomeController::class,'getProviders'])->name('site.contacts.getProviders');
  //  Route::get('/contact-remove', [ContactController::class,'removeFromSession'])->name('site.contacts.removeFromSession');
});

############### End Providers ####################

Route::get('/get-card', [App\Http\Controllers\HomeController::class, 'getCard'])->name('card');


/*Route::get('/test',function(){
         $card = \App\Models\Card::find(1);

    $card->  update([
            'name' => 'firstCard detach',
            'user_name' =>1,
        ]);
    return true;
});*/
