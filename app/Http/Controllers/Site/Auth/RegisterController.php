<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
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
        return User::create([
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
