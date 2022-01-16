<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Contact;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landingPage()
    {
        return view('site.pages.landingPage');
    }

    public function home()
    {
        $userId = Auth::id();
        $contacts = Contact::whereUserId($userId)->get();
        return view('site.pages.home',compact('contacts'));
    }

    public function getCard()
    {
        $card = Card::get();
        $card->contact();
        return 'ds';
    }
}
