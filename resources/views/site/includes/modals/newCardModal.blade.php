<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">
            <p class="text-center">New Card</p>
        </div>
        <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">
            <form id="addCardForm">
                @csrf
                <input type="text" name="cardName" class="form-control" placeholder="Card Name">
            </form>
        </div>
        <div class="row pt-5 d-flex justify-content-center" style="font: normal normal bold 18px/33px Cairo; color: #171717;">
            <p class="text-center">Add a Verified Contact to your Card</p>
        </div>
        @if(isset($contacts) && $contacts->count()>0)
            @foreach($contacts as $contact)
                <div class="row pt-5 d-flex justify-content-center align-content-center">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3C5A9A" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg></a>
                    <p class="pl-5 pt-2 pr-5">{{$contact->contact_string}}</p>
                    <div id="btn1">
                        <button type="button" class="btn btn-outline-primary btn-sm" data-id="{{$contact->id}}" id="addContactToCard">Add</button>
                    </div>
                    <div id="btn2" style="display: none">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-id="{{$contact->id}}" id="removeContactFromCard">Remove</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row pt-5 d-flex justify-content-center align-content-center">
                <p class="pl-5 pt-2 pr-5">You have no contacts add at least one contact</p>
            </div>
        @endif
    </div>
    <div class="modal-footer pr-5 pt-5 pb-5">
        <button type="button" class="btn btn-light">Reset</button>
        <button type="button" id="saveCard" class="btn btn-warning">Save Card</button>
    </div>
