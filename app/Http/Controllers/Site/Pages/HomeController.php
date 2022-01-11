<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Models\Card;

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
        return view('site.pages.home');
    }

    public function getCard()
    {
        $card = Card::get();
        $card->contact();
        return 'ds';
    }
}
