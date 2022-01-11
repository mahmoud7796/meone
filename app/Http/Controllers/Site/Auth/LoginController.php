<?php

namespace App\Http\Controllers\Site\Auth;

use App\Helper\Getname;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(){
        return view('site.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        try{
            $userEmail= User::whereEmail($request->email)->first();
            if($userEmail===null)
            {
                return redirect()->back()->with(['error' => 'This email doesn\'t match our record']);
            }
            if (auth()->guard()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            {
                return redirect()->route('site.home');
            }else
            {
                return redirect()->back()->with(['error' => 'Email Or Password Is Wrong']);
            }
        }catch (\Exception $ex){
            return redirect()->back()->with(['error' => 'Something error please try again later']);

        }
    }


    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }


    public function callback($service){
        try {
            $name = 'Mahmoud Kamal Ali Diab Alis  dskvp dk pdoskvodpvks ';
            $customName = new Getname();
            $customName->getName($name);
             $fname = $customName->fName;
             $mName = $customName->lName;


            $user = Socialite::with($service)->user();
            $user_data = response()->json($user);
            $save_user_data = User::updateOrCreate([
                'facebook_id'=>$user_data->getId()
            ],[
                'first_name' => $user_data->getName(),
            ]);

        }catch (\Exception $ex){
            return redirect()->back()->with(['error' => 'Something error please try again later']);

        }


    }

}
