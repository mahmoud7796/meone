<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardRequest;
use App\Models\Card;
use App\Models\CardContact;
use App\Models\Contact;
use Auth;

class CardController extends Controller
{

    public function store(CardRequest $request)
    {
       $userId= Auth::id();

        $card = Card::create([
            'name' => $request->card,
            'user_id' => $userId,
        ]);

$contacts = $request->contactsIds;

        if($contacts){
            for ($i=0;$i<count($contacts);$i++){
                CardContact::create([
                    'contact_id' => $contacts[$i],
                    'card_id' => $card->id
                ]);
            }
        }else{
            return response()->json([
                'status' => true,
                'msg' => 'Card added successfully else foreach',
            ]);
        }

        return response()->json([
            'status' => true,
            'msg' => 'Card added successfully last res',
        ]);
    }


    public function update(ContactRequest $request, $id){
        $userId= Auth::id();
        $contact = Contact::find($id);
        if (!$contact)
            return response()->json([
                'status' => false,
                'msg' => 'SomeThing Error Try Again',
            ]);
        else
            $contact->update([
                'contact_string' => $request->contact,
                'provider_id' => $request->provider_id,
                'user_id' => $userId,
            ]);

        return response()->json([
            'status' => true,
        ]);
    }

    public function delete($id)
    {
        $contact= Contact::find($id);
        $contact->delete();
        return response()->json([
            'status' => true,
        ]);
    }

}
