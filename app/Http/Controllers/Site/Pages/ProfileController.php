<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePasswordRequest;
use App\Models\Card;
use App\Models\Contact;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $cards = Card::whereUserId($user->id)->count();
        $contacts = Contact::whereUserId($user->id)->count();
        return view('site.pages.profile',compact('user','cards','contacts'));
    }

    public function changePassword(ProfilePasswordRequest $request)
    {
        try{
            $currentPass = Auth::user()->password;
            if (Hash::check($request->oldPassword, $currentPass)) {
                $user = User::find(Auth::id());
                $user -> password = Hash::make($request->password);
                $user -> save();

                return response()->json([
                    'status' => true,
                    'msg' => 'Your password changed successfully',
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'msg' => 'Old password is wrong',
                ]);
            }

        }catch (\Exception $ex){
            return $ex;
            return redirect()->back()->with(['error' => 'Something error please try again later']);
        }
    }
}
