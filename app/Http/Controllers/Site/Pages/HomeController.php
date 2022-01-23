<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Contact;
use App\Models\Provider;
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
        $verifiedContacts = Contact::whereUserId($userId)->get();
        $unVerifiedContacts = Contact::whereUserId($userId)->limit(0);
        $providers = Provider::get();
        $cards= Card::whereUserId($userId)->withCount(['contact'])->get();
        $contactCards = Card::with('contact');
        return view('site.pages.home',compact('verifiedContacts','unVerifiedContacts','providers','cards','contactCards'));
    }

    public function getCard()
    {
        $card = Card::get();
        $card->contact();
        return 'ds';
    }
}
