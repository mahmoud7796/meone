<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Jobs\VerifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('site.auth.register');
    }

    protected function create(RegisterRequest $request)
    {
         $user = User::create([
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

         dispatch(new VerifyEmail($user));

        return redirect()->route('landingPage')->with(['success'=>'We send verifying email check it']);

    }
}
