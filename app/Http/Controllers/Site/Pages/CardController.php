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
                'msg' => 'Card added successfully',
            ]);
        }
        return response()->json([
            'status' => true,
            'msg' => 'Card added successfully',
        ]);
    }


    public function edit($id)
    {
        $userId= Auth::id();
        $card= Card::find($id);
        $contactsThatInCard= Card::whereUserId($userId)->whereId($id)->with('contact:id')->first();
        $contactsId =  $contactsThatInCard->contact;
        $contactids = array();

          foreach($contactsId as $contactId) {
              $contactids[]=$contactId->id;
        }

       return response()->json([
            'card' => $card,
            'contactsThatInCard' => $contactids,
               'status' => true
            ]
        );
    }

    public function update(CardRequest $request, $id){
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
