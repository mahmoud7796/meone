<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserVerifyEmail;
use Carbon\Carbon;
class VerifyEmailController extends Controller
{

    public function verifyEmail($token)
    {
        $verifyUser = UserVerifyEmail::whereToken($token)->first();
        if($verifyUser){
             $user = $verifyUser->users;
            if(!$user->email_verified_at) {
                $verifyUser->users->email_verified_at = now();
                 $verifyUser->users->save();
                return redirect()->route('site.login')->with('success', 'Your email verified successfully you can login now!');
            } else {
                return redirect()->route('site.login')->with('success', 'Your already email verified your email');
            }
        }
        return redirect()->route('landingPage')->with('error', 'Invalid URL');
    }
}


