<?php

namespace App\Observers;

use App\Models\Card;

class CardObserver
{
    public function updated(Card $card)
    {
        $card -> contact()->detach();
    }


}
