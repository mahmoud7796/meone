<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
    }

    public function getCard()
    {
        $card = Card::get();
        $card->contact();
          return 'ds';


    }
}
