<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Auth;
class ContactController extends Controller
{
/*    public function getUserContact(){
         $userId = Auth::id();
           $contacts = Contact::whereUserId($userId)->get();
          return view('site.pages.home',compact('contacts'));
    }*/
}
