<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function sotreInSession(Request $request)
    {
        session()->push('card.contactId',$request->contactId);
        return response()->json([
            'status' => true,
            'msg' => 'added successfully',
        ]);
    }


    public function removeFromSession(Request $request)
    {
        return  $cards = session()->get('card');
      //  return $cards = session()->forget('card');

        return $contactId = session()->get('card.contactId')[0];

        if ($cards && count($cards) > 0) {
            if ($contactId && count($contactId) > 0) {
                $contactIdIndex = array_search($request->contactId, $contactId, true);
                if (strval($contactIdIndex) != "") {
                    array_splice($contactId, $contactIdIndex, 1);
                    session()->put('card.contactId', $contactId);
                } else {
                    return response()->json([
                        'status' => false,
                        'msg' => 'There is no items to remove',
                    ]);
                }

            }
        }
    }

}
