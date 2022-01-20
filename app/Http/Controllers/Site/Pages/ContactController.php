<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sotreInSession(Request $request)
    {
        session()->push('card.contactId',$request->contactId);
        return response()->json([
            'status' => true,
            'msg' => 'Contact added successfully',
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

    public function create(ContactRequest $request)
    {
        $userId= Auth::id();
        Contact::create([
            'contact_string' => $request->contact,
            'provider_id' => $request->provider_id,
            'user_id' => $userId,
        ]);

        return response()->json([
            'status' => true,
            'msg' => 'added successfully',
        ]);
    }

    public function edit($id)
    {
        $contact= Contact::find($id);
        return response()->json($contact);
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
