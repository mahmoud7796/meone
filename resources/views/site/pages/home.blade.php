<!doctype html>
<html lang="en"><head>
    <head>
        <title>1 ME</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{--jquery and ajax--}}
        <script src="https://code.jquery.com/jquery-3.1.1.min.js">
            {{--jquery and ajax--}}
            {{--Bootstrab --}}
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        {{--Bootstrab --}}


        {{--validate jquery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
        {{-- validate jquery --}}
    </head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	  <style type="text/css">
	  @import url("{{asset('assets/css/style.css')}}");

	  body {

}
      </style>
    <title>Home Page</title>
  </head>


<body>

	<div class="container-fluid">
        @include('site.includes.header')

	<section class="row mb-5 pt-5 mt-5 align-items-center">
	     <div class="col-md-6 mt-5 pt-5">
		 <div class="row">
				 <div class="col d-flex justify-content-center">

                     <p class="font-weight-bold" style="font-size: 22px">Your Cards</p>
				 </div>
			  <div class="col d-flex justify-content-center">
				 <button type="button" class="btn btn-outline-primary pl-5 pr-5 font-weight-medium" data-toggle="modal" data-target="#exampleModal" style="border-width:medium">New Card</button>


         <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">


      <!-- Modal For Add New Card and Contacts addNewCard-->
@include('site.includes.modals.newCardModal')
        <!-- end Modal For Add New Card and Contacts-->

    </div>
  </div>
</div>
				 </div>
			 </div>


			 <div class="row">
				 <div class="col-md-10">
		<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
          @if(isset($cards) && $cards->count()>0)
              @foreach($cards as $index => $card)
	    <li data-target="#carouselExampleIndicators1" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active':''}}"></li>
              @endforeach
          @endif
  </ol>

<!--            carousel shows Cards carouselCard-->

	  <div class="carousel-inner text-center" role="listbox">

          @if(isset($cards) && $cards->count()>0)
              @foreach($cards as $index => $card)
	 <div class="carousel-item pl-5 pr-5 pt-3 pb-5 {{$index == 0 ? 'active':''}}">
	        <div class="card pl-5 pr-5 pt-3  pb-5 ">
	      <div class="row align-items-center" id="row1">
		<div class="col col-md-8 " id="col2">
			<div class="row pt-5 pb-5 pl-5  ">
		<p class="" style="color: #FBFBFB">{{$card->name}}</p>
			</div>
			<div class="row">
		     	<div class="col pl-5">
			<div class="row ">
			<button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
  <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
</svg> share </button>
				</div>
		   <div class="row ">

		    <button id="editCard" data-id="{{$card->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg> Edit</button>
               <button id="deleteCardId" data-id="{{$card->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldelete-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                       <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                   </svg>Delete</button>
				</div>
				</div>
				<div class="col pl-5 ">
						<div class="row">
					   <p class=" pl-3 pr-4"  style="color: #FBFBFB">Opened</p>
					</div>
					<div class="row">
						<p class="pl-5" style="color: #FBFBFB">0</p>

					</div>
				</div>
			    <div class="col pl-5 ">

					<div class="row">

					   <p class=" pl-3 pr-4"  style="color: #FBFBFB">Contacts which added</p>
					</div>
					<div class="row">
						<p class="pl-5" style="color: #FBFBFB">{{$card->contact_count}}</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col col-md-4">
			 <img class="" src="{{asset('assets/img/qr-code 3.png')}}" width="84" height="84" alt=""/>
		</div>
			</div>
			   </div>
		  </div>
              @endforeach
          @else
              <div class="carousel-item pl-5 pr-5 pt-3 pb-5 active">
                  <div class="card pl-5 pr-5 pt-3  pb-5 ">
                      <div class="row align-items-center" id="row1">
                          <div class="col col-md-8 " id="col2">
                              <div class="row pt-5 pb-5 pl-5  ">
                                  <h3 class="" style="color: #FBFBFB">You have no cards</h3>
                              </div>
                          </div>

                          <div class="col col-md-4">
                              <img class="" src="{{asset('assets/img/qr-code 3.png')}}" width="84" height="84" alt=""/>
                          </div>
                      </div>
                  </div>
              </div>
              @endif

              <a class="carousel-control-prev " href="#carouselExampleIndicators1" role="button" data-slide="prev" > <span class="carousel-control-prev-icon pl-5" aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a>
	</div>
			   </div>
				 </div>
				 </div>


       <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">

@include('site.includes.modals.editCardModal')

  </div>
</div>

        <div class="modal fade" id="modaldelete-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog" role="document">

                @include('site.includes.modals.deleteCardConfirmationModal')

            </div>
        </div>


        @include('site.includes.modals.deleteContactConfirmationModal')

				 </div>

	    <div class="col-md-6 mt-5 pt-5 text-center">

	      <div class="row pl-5 ml-5">

			<p class="font-weight-bold" style="font-size: 22px">Card Contacts</p>

			</div>

            @if(isset($verifiedContacts) && $verifiedContacts->count()>0)
                @foreach($verifiedContacts as $index => $contact)
			<div class="row pt-5 pl-5 ml-5">

                <div style="width: 50px;height: 50px">
                    <img width="100%" height="100%" src="{{$contact->provider->imgURL}}" alt="face">
                </div>

                <div style="width: 150px;height: 50px">
                    <p class="pl-5">{{$contact->contact_string}}</p>
                </div>

			<a id="getContactCardDeleteId" data-id="{{$contact->id}}" data-toggle="modal" data-target="#modaldelete-3"  href="" class="pl-5">	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>

			</div>
                @endforeach
            @else
                <div style="width: 300px;height: 50px">
                    <p class="pl-5">You have no contacts</p>
                </div>
                @endif
			</div>
    @include('site.includes.modals.deleteContactCardConfirmationModal')

    </section>

	<section>


	<div class="row d-flex jusyify-content-center">
		<div class="col-md-6 ">

			<div class="row pl-5 ml-5">
			<p class="font-weight-bold" style="font-size: 22px">Your Contacts</p>
			</div>
			<div class="row pt-3 pl-5 ml-5">
			<p class="font-weight-bold" style="font-size: 17px; color:#52606D;">Verified Contacts</p>
			</div>

			<div class="row pl-5">

		<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
          @if(isset($verifiedContacts) && $verifiedContacts->count()>0)
              @foreach($verifiedContacts as $index => $contact)
	    <li data-target="#carouselExampleIndicators2" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active':''}}"></li>
              @endforeach
              @endif
      </ol>

<!--  Carousel For show Contacts showCarouselContacts-->

	  <div class="carousel-inner text-center" role="listbox">

           @if(isset($verifiedContacts) && $verifiedContacts->count()>0)
               @foreach($verifiedContacts as $index => $contact)

		   <div class="carousel-item pl-5 pr-5 pt-3 pb-5 {{$index == 0 ? 'active':''}}">
	        <div class="card pl-5 pr-5 pt-3  pb-5 ">
	           <div class="row pt-5 pl-5 pr-5">
<div>

                   <a id="getContact" data-id="{{$contact->id}}" class="pr-3"  data-toggle="modal" data-target="#exampleModal2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                           <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                       </svg>
                   </a><br>

                   <a class="pr-3" id="getDeleteId" data-id="{{$contact->id}}"  data-toggle="modal" data-target="#modaldelete-1" href="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
                       <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                   </svg>
                   </a>
</div>
                   <div style="width: 50px;height: 50px">
                       <img width="100%" height="100%" src="{{$contact->provider->imgURL}}" alt="face">
                   </div>
                       <p class="pl-5">{{$contact->contact_string}}</p>

               </div>
            </div>
		  </div>
              @endforeach
          @else
              <div class="carousel-item pl-5 pr-5 pt-3 pb-5 active">
                  <div class="card pl-5 pr-5 pt-3  pb-5 ">
                      <div class="row pt-5 pl-5 pr-5">
                          <p class="pl-5">You do not have any contacts yet</p>
                      </div>
                  </div>
              </div>
          @endif
              <a class="carousel-control-prev " href="#carouselExampleIndicators2" role="button" data-slide="prev" > <span class="carousel-control-prev-icon pl-5" aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a>
	</div>
			   </div>
			</div>

        {{-- Edit contact editContact--}}
@include('site.includes.modals.editContactModal')
        {{-- end Edit contact editContact--}}

		<div class="col-md-6">
			<div class="row d-flex justify-content-center">
					 <button type="button" class="btn btn-outline-primary pl-3 pr-3 font-weight-medium" style="border-width:medium" data-toggle="modal" data-target="#exampleModal1">New Contact</button>


<!--Modal For Add Contact AddNewContact-->
@include('site.includes.modals.newContactModal')
            <!--End Modal For Add Contact AddNewContact-->


			<div class="row  pt-3">
			<p class="font-weight-bold" style="font-size: 17px; color:#52606D;">Unverified Contacts</p>
			</div>
			<div class="row">
		<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
          @if(isset($unVerifiedContacts) && $unVerifiedContacts->count()>0)
              @foreach($unVerifiedContacts as $index => $contact)
	    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="{{$index == 0 ? 'active':''}}"></li>
              @endforeach
              @endif
  </ol>



	  <div class="carousel-inner text-center" role="listbox">

          @if(isset($unVerifiedContacts) && $unVerifiedContacts->count()>0)
              @foreach($unVerifiedContacts as $index => $contact)

                  <div class="carousel-item pl-5 pr-5 pt-3 pb-5 {{$index == 0 ? 'active':''}}">
                      <div class="card pl-5 pr-5 pt-3  pb-5 ">
                          <div class="row pt-5 pl-5 pr-5">
                              <div>

                                  <a id="getContact" data-id="{{$contact->id}}" class="pr-3"  data-toggle="modal" data-target="#exampleModal2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                      </svg>
                                  </a><br>

                                  <a class="pr-3" id="getDeleteId" data-id="{{$contact->id}}"  data-toggle="modal" data-target="#modaldelete-1" href="">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                                      </svg>
                                  </a>
                              </div>
                              <div style="width: 50px;height: 50px">
                                  <img width="100%" height="100%" src="{{$contact->provider->imgURL}}" alt="face">
                              </div>
                              <p class="pl-5">{{$contact->contact_string}}</p>

                          </div>
                      </div>
                  </div>
              @endforeach
          @else
              <div class="carousel-item pl-5 pr-5 pt-3 pb-5 active">
                  <div class="card pl-5 pr-5 pt-3  pb-5 ">
                      <div class="row pt-5 pl-5 pr-5">
                          <p class="pl-5">You have no unverified</p>
                      </div>
                  </div>
              </div>
          @endif

 		<a class="carousel-control-prev " href="#carouselExampleIndicators3" role="button" data-slide="prev" > <span class="carousel-control-prev-icon pl-5" aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a>
	</div>

</div>
			   </div>
			</div>

		</div>

		</div>

	</section>

	</div>


<script>

//Add New Contact

$(document).on('click', '#saveContact', function(e){
    e.preventDefault();
    $("#saveContact").attr("disabled", true);
    $('#contact_error').text('');

    var selectedProviderId= $('#provider').find(":selected").val();
    var contactName= $('#contactName').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'post',
        enctype: 'multipart/form-data',
        url: "{{route('site.contacts.create')}}",
        data:{
            contact:contactName,
            provider_id:selectedProviderId
        } ,
        cache: false,
        success: function (response){
            if(response.status===true){
                $('#addContactMsg').show();
                $('#addContactForm')[0].reset();
                window.location.href = "{{route('home')}}";
            }
        }, error: function (reject){
            $("#saveContact").attr("disabled", false);
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val){
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
});

function resetForm(){
    $('#addContactForm')[0].reset();
    }


//get specific Contact getContactId

$('body').on('click', '#getContact', function (event) {
    event.preventDefault();
    var contact_id = $(this).data('id');
    $.get('contact-edit/' + contact_id, function (data) {
        var providerId = data.provider_id;
        $('#contactNameEdit').val(data.contact_string);
        $('#contactId').val(data.id);
        $("#providerEdit").children('[value="' + providerId +'"]').attr('selected', true);
    })
});


//update specific Contact updateContact

$(document).on('click', '#updateContact', function(e){
    e.preventDefault();
    $("#updateContact").attr("disabled", true);
    $('#contact_edit_error').text('');
    var selectedProviderId= $('#providerEdit').find(":selected").val();
    var contactName= $('#contactNameEdit').val();
    var contactId= $('#contactId').val();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'post',
        url: "{{url('/contact-update')}}" +'/'+ contactId,
        data: {
            contact:contactName,
            provider_id:selectedProviderId
        },
        cache: false,
        success: function (response){
            if(response.status===true){
                $('#editContactMsg').show();
                window.location.href = "{{route('home')}}";
            }
        },

        error: function (reject){
            $("#updateContact").attr("disabled", false);
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val){
                $("#" + key + "_edit_error").text(val[0]);
            });
        }
    });
});




//get deleteId Contact getDeleteId

$(document).on('click', '#getDeleteId', function(e){
    event.preventDefault();
    var contact_id = $(this).data('id');
        $('#deleteId').val(contact_id);
});


//delete contact
$(document).on('click', '#confirmDelete', function(e){
    e.preventDefault();
    $("#confirmDelete").attr("disabled", true);
    var deleteId= $('#deleteId').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'get',
        url: "{{url('/contact-delete')}}" +'/'+ deleteId,
        data: {
        },
        cache: false,
        success: function (response){
            if(response.status===true){
                $('#deleteContactMsg').show();
                window.location.href = "{{route('home')}}";
            }
        },
        error: function (reject){
        }
    });
});


// add new card

   $(document).on('click', '#saveCard', function(e){
       $("#saveCard").attr("disabled", true);
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $('#card_error').text('');

           var cardName= $('#cardName').val();
           var contacts = [];
           $.each($("input[name='contactsCheckbox']:checked"), function(){
               contacts.push($(this).val());
           });

       $.ajax({
           type: 'post',
           url: "{{route('site.card.create')}}",
           data:{
               card:cardName,
               contactsIds:contacts,
           },
           cache: false,
           success: function (response){
               if(response.status===true){
                   $('#addCardMsg').show();
                   $('#addCardForm')[0].reset();
                   $('input[name="contactsCheckbox"]').each(function() {
                       this.checked = false;
                   });
                   $('#addCardMsg').show();
                   window.location.href = "{{route('home')}}";
               }
           }, error: function (reject){
               $("#saveCard").attr("disabled", false);
               var response = $.parseJSON(reject.responseText);
               $.each(response.errors, function(key, val){
                   $("#" + key + "_error").text(val[0]);
               });
           }
       });
   });

   function resetNewCard(){
       $('#addCardForm')[0].reset();
       $('input[name="contactsCheckbox"]').each(function() {
           this.checked = false;
       });
   }


   //get specific Card getCardId
   $(document).on('click', '#editCard', function(e){
       $('input[name="contactsCheckboxEdit"]').each(function() {
           this.checked = false;
       });

       var card_id = $(this).data('id');
       $.get('card-edit/' + card_id, function (data) {
           const ids =data.contactsThatInCard;
            $('#editCardName').val(data.card.name);
            $('#cardId').val(card_id);

           for (const checkbox of document.querySelectorAll("#contactsCheckboxEdit[name=contactsCheckboxEdit]")) {
               if (ids.includes(Number(checkbox.value))) {
                   checkbox.checked = true;
               }
           }
           })
   });


$(document).on('click', '#updateCard', function(e){
    $("#updateCard").attr("disabled", true);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#card_edit_error').text('');

    var cardName= $('#editCardName').val();
    var cardId = $('#cardId').val();

    var contacts = [];
    $.each($("input[name='contactsCheckboxEdit']:checked"), function(){
        contacts.push($(this).val());
    });

    $.ajax({
        type: 'post',
        url: "{{route('site.card.update')}}",
        data:{
            card:cardName,
            contactsIds:contacts,
            card_id:cardId
        },
        cache: false,
        success: function (response){
            if(response.status===true){
                $('#updateCardMsg').show();
                $('#editCardMsg').show();
                window.location.href = "{{route('home')}}";
            }
        }, error: function (reject){
            $("#updateCard").attr("disabled", false);
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val){
                $("#" + key + "_edit_error").text(val[0]);
            });
        }
    });
});



//get deleteId Card getDeleteId

$(document).on('click', '#deleteCardId', function(e){
    event.preventDefault();
    var card_id = $(this).data('id');
     $('#deleteCardId').val(card_id);
});


//delete card
$(document).on('click', '#confirmCardDelete', function(e){
    e.preventDefault();
    $("#confirmCardDelete").attr("disabled", true);
    var deleteId= $('#deleteCardId').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'get',
        url: "{{url('/card-delete')}}" +'/'+ deleteId,
        data: {
        },
        cache: false,
        success: function (response){
            if(response.status===true){
                window.location.href = "{{route('home')}}";
            }
        },
        error: function (reject){
        }
    });
});


//get deleteId CardContact getDeleteId

$(document).on('click', '#getContactCardDeleteId', function(e){
    event.preventDefault();
    var contact_id = $(this).data('id');
    $('#deleteCardContactId').val(contact_id);
});


//delete CardContact
$(document).on('click', '#confirmCardContactDelete', function(e){
    e.preventDefault();
    $("#confirmCardContactDelete").attr("disabled", true);
    var deleteId= $('#deleteCardContactId').val();
    console.log(deleteId)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'get',
        url: "{{url('/contact-delete')}}" +'/'+ deleteId,
        data: {
        },
        cache: false,
        success: function (response){
            if(response.status===true){
                window.location.href = "{{route('home')}}";
            }
        },
        error: function (reject){
        }
    });
});



</script>
</body>
</html>
