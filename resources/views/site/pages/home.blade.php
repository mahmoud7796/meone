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

        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Card</p>

	</div>


			   <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

                  <input type="name" class="form-control" placeholder="Card Name">

	</div>




		      	   <div class="row pt-5 d-flex justify-content-center" style="font: normal normal bold 18px/33px Cairo; color: #171717;">

	<p class="text-center">Add a Verified Contact to your Card</p>

	</div>



		        			<div class="row pt-5 d-flex justify-content-center align-content-center">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3C5A9A" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

				<p class="pl-5 pt-2 pr-5">Email@Example.com</p>

	                <button type="button" class="btn btn-outline-secondary btn-sm" id="btn-2">Remove</button>

			</div>




		        			<div class="row pt-5 d-flex justify-content-center align-content-center">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3C5A9A" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

				<p class="pl-5 pt-2 pr-5">Email@Example.com</p>

	                <button type="button" class="btn btn-outline-primary btn-sm" id="btn-2">Add</button>

			</div>




		        			<div class="row pt-5 d-flex justify-content-center align-content-center">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3C5A9A" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

				<p class="pl-5 pt-2 pr-5">Email@Example.com</p>

	                <button type="button" class="btn btn-outline-primary btn-sm" id="btn-2">Add</button>

			</div>



      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Card</button>



      </div>
    </div>
  </div>
</div>
				 </div>

	    <div class="col-md-6 mt-5 pt-5 text-center">

	      <div class="row pl-5 ml-5">

			<p class="font-weight-bold" style="font-size: 22px">Card Contacts</p>

			</div>

			<div class="row pt-5 pl-5 ml-5">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3C5A9A" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

				<p class="pl-5">Emal@Example.com</p>

			<a href="" class="pl-5">	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>

			</div>


			<div class="row pt-3 pl-5 ml-5">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" id="Twitter" width="40" height="40" viewBox="0 0 40 40">
  <circle id="Ellipse_22" data-name="Ellipse 22" cx="20" cy="20" r="20" fill="#2daae1"/>
  <path id="Path_29" data-name="Path 29" d="M257.762,145.789a10.5,10.5,0,0,1-3.022.829,5.277,5.277,0,0,0,2.313-2.911,10.511,10.511,0,0,1-3.342,1.277,5.264,5.264,0,0,0-9.1,3.6,5.321,5.321,0,0,0,.136,1.2,14.939,14.939,0,0,1-10.844-5.5,5.267,5.267,0,0,0,1.628,7.024,5.237,5.237,0,0,1-2.383-.658v.066a5.264,5.264,0,0,0,4.22,5.159,5.234,5.234,0,0,1-1.386.184,5.34,5.34,0,0,1-.99-.093,5.268,5.268,0,0,0,4.914,3.654,10.594,10.594,0,0,1-7.79,2.178,14.962,14.962,0,0,0,23.035-12.6q0-.342-.016-.681A10.72,10.72,0,0,0,257.762,145.789Z" transform="translate(-224.939 -133.745)" fill="#fff"/>
</svg></a>

				<p class="pl-5 pr-5">User Example</p>

			<a href="" class="pl-5">	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>

			</div>


			<div class="row pt-3 pl-5 ml-5">

                <a href=""><svg xmlns="http://www.w3.org/2000/svg" id="Phone_Number" data-name="Phone Number" width="40" height="40" viewBox="0 0 40 40">
  <path id="Path_17" data-name="Path 17" d="M40,20A20,20,0,1,1,20,0,20,20,0,0,1,40,20" fill="#76abc4"/>
  <path id="Path_18" data-name="Path 18" d="M32.977,38a.65.65,0,0,1-.21-.032c-.142-.047-.329-.1-.556-.16-2.94-.814-11.885-3.289-16.189-16.643a.676.676,0,0,1-.013-.368c.022-.087.564-2.187,4.173-2.786a.665.665,0,0,1,.4.053c.132.06,3.258,1.53,3.518,4.526a.68.68,0,0,1-.177.522,7.314,7.314,0,0,0-1.867,2.864c.082.691,2.252,4.337,6.137,6.237a9.126,9.126,0,0,0,2.9-1.807.675.675,0,0,1,.438-.164.646.646,0,0,1,.165.021,6.468,6.468,0,0,1,4.24,2.953.68.68,0,0,1,.066.417,5.525,5.525,0,0,1-2.734,4.307.679.679,0,0,1-.282.061" transform="translate(-5.996 -6.75)" fill="#638da0"/>
  <path id="Path_19" data-name="Path 19" d="M24.1,20.589c-.261-3-3.386-4.466-3.518-4.526a.664.664,0,0,0-.4-.053c-3.609.6-4.151,2.7-4.173,2.786a.676.676,0,0,0,.013.368c4.3,13.354,13.249,15.829,16.189,16.643.227.063.413.113.556.16a.679.679,0,0,0,.492-.029,5.525,5.525,0,0,0,2.734-4.307.68.68,0,0,0-.066-.417,6.468,6.468,0,0,0-4.24-2.952.666.666,0,0,0-.6.143,9.11,9.11,0,0,1-2.9,1.807c-3.886-1.9-6.056-5.545-6.138-6.236a7.314,7.314,0,0,1,1.868-2.864.68.68,0,0,0,.177-.523" transform="translate(-5.996 -6)" fill="#fffffe"/>
</svg></a>

				<p class="pl-5 mr-5">01234567898</p>

			<a href="" class="pl-5"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>
			</div>

			</div>

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
          @if(isset($contacts) && $contacts->count()>0)
              @foreach($contacts as $index => $contact)
	    <li data-target="#carouselExampleIndicators2" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active':''}}"></li>
              @endforeach
              @endif
      </ol>

<!--  Carousel For show Contacts showCarouselContacts-->

	  <div class="carousel-inner text-center" role="listbox">

           @if(isset($contacts) && $contacts->count()>0)
               @foreach($contacts as $index => $contact)
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

  <circle id="Ellipse_7" data-name="Ellipse 7" cx="20" cy="20" r="20" fill="#3c5a9a"/>
  <path id="Path_9" data-name="Path 9" d="M337.926,92.677H333.5c-2.629,0-5.554,1.106-5.554,4.917.013,1.328,0,2.6,0,4.031H324.9v4.84h3.136V120.4H333.8V106.373h3.8l.344-4.762H333.7s.01-2.118,0-2.733c0-1.506,1.567-1.42,1.661-1.42.746,0,2.2,0,2.568,0V92.677h0Z" transform="translate(-311.423 -86.538)" fill="#fff"/>
</svg></span></a>

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
	    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
  </ol>



	  <div class="carousel-inner text-center" role="listbox">


		   <div class="carousel-item pl-5 pr-5 pt-3 pb-5 active">


	        <div class="card pl-5 pr-5 pt-3  pb-5 ">

	           <div class="row pt-5 pl-5 pr-5">

				   <a class="pr-3" data-toggle="modal" data-target="#exampleModal15" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
				                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#E13138" class="bi bi-pinterest" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>


                <a href=""></a>

				<p class="pl-5">Email@Example.com</p>



			</div>

				<div class="row pt-5 pl-5 pr-5">


								   <a class="pr-3" data-toggle="modal" data-target="#exampleModal16" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

 <svg xmlns="http://www.w3.org/2000/svg" id="Snap_Chat" data-name="Snap Chat" width="40" height="40" viewBox="0 0 40 40">
  <circle id="Ellipse_24" data-name="Ellipse 24" cx="20" cy="20" r="20" fill="#625d52"/>
  <g id="snapchat" transform="translate(8.75 7.11)">
    <path id="Path_21" data-name="Path 21" d="M20.857,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038a5.316,5.316,0,0,0-2.234.5A5.056,5.056,0,0,0,7.3,4.4,5.867,5.867,0,0,0,6.031,6.242c-.447,1.055-.31,2.827-.31,4.255v0c0,.152.073.312.082.468a.619.619,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.633,2.633,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.369,4.369,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.829,1.829,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,20.857,17.638Z" transform="translate(0 0)" fill="#ffeb5a"/>
    <path id="Path_22" data-name="Path 22" d="M5.721,10.476V10.5c0,.152.073.312.082.468a.62.62,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.634,2.634,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.368,4.368,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.816,1.816,0,0,0,.46.015h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215.486.486,0,0,0-.392-.513c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.548,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.422,5.422,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038" transform="translate(0 0)" fill="#fcdf31"/>
    <path id="Path_23" data-name="Path 23" d="M40.932,17.657c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.421a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.387-.027-.405-.027L31,3.012V22.663l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.466,7.466,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.657Z" transform="translate(-20.075 -0.02)" fill="#f4c811"/>
    <path id="Path_24" data-name="Path 24" d="M40.932,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.4a5.713,5.713,0,0,0-2.326-.5l-.037.028c-.018,0,.21-.03-.115-.03,0,0,.325,0,0,0L31,2.89V22.644l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.638Z" transform="translate(-20.075)" fill="#f4c811"/>
    <ellipse id="Ellipse_10" data-name="Ellipse 10" cx="0.515" cy="0.543" rx="0.515" ry="0.543" transform="translate(5.686 21.804)" fill="#fcdf31"/>
    <ellipse id="Ellipse_11" data-name="Ellipse 11" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(4.114 21.747)" fill="#efab00"/>
    <ellipse id="Ellipse_12" data-name="Ellipse 12" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(3.029 19.745)" fill="#fcdf31"/>
    <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(2.759 21.461)" fill="#fcdf31"/>
    <ellipse id="Ellipse_14" data-name="Ellipse 14" cx="0.407" cy="0.429" rx="0.407" ry="0.429" transform="translate(15.17 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_15" data-name="Ellipse 15" cx="0.108" cy="0.114" rx="0.108" ry="0.114" transform="translate(16.255 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_16" data-name="Ellipse 16" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(17.23 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_17" data-name="Ellipse 17" cx="0.298" cy="0.315" rx="0.298" ry="0.315" transform="translate(18.477 21.461)" fill="#efab00"/>
    <ellipse id="Ellipse_18" data-name="Ellipse 18" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(19.127 19.974)" fill="#f4c811"/>
    <ellipse id="Ellipse_19" data-name="Ellipse 19" cx="0.19" cy="0.2" rx="0.19" ry="0.2" transform="translate(20.59 20.431)" fill="#f4c811"/>
    <ellipse id="Ellipse_20" data-name="Ellipse 20" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(7.094 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_21" data-name="Ellipse 21" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(8.125 22.204)" fill="#f4c811"/>
    <path id="Path_25" data-name="Path 25" d="M45.2,21.152A7.017,7.017,0,0,1,43.4,18.706l-.011-.024a.916.916,0,0,1-.094-.717,1.18,1.18,0,0,1,.687-.531c-2.3.887-.782,2.691.856,3.54C44.966,21.037,45.08,21.094,45.2,21.152Zm-2.38-9.142c-.189,2.456-.511,3.29.345,3.518-.014-.006-.033-.011-.045-.016.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,6.211,6.211,0,0,0-.517-.973C42.406,10.359,42.939,10.422,42.817,12.009Zm-.345,12.609c-.776-.318-.939.56-1.988,1.534l.127-.093h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.84,1.84,0,0,0,.459.014h.023c.025,0,.047.037.07.035a15.637,15.637,0,0,0-1.893-.73Zm2.57-.559A7.437,7.437,0,0,0,47,23.522a1.278,1.278,0,0,0,.676-.609.64.64,0,0,0,.049-.217.482.482,0,0,0-.01-.084.25.25,0,0,0-.039.034c-.589.6-1.2-.021-1.911-.021s-.75.8-.752,1.512a.606.606,0,0,1,.029-.078Z" transform="translate(-26.474 -4.545)" fill="#efab00"/>
    <g id="Group_47" data-name="Group 47" transform="translate(1.259 12.889)">
      <path id="Path_26" data-name="Path 26" d="M9.05,35.75A7.017,7.017,0,0,0,10.843,33.3l.011-.024a.916.916,0,0,0,.094-.717,1.18,1.18,0,0,0-.687-.531c2.3.887.783,2.691-.856,3.54-.124.064-.238.12-.354.178Z" transform="translate(-6.523 -32.032)" fill="#ffeb5a"/>
      <path id="Path_27" data-name="Path 27" d="M6.532,49.131c.776-.318.939.56,1.988,1.534l-.127-.093h0a3.5,3.5,0,0,0-1.4-.762,4.36,4.36,0,0,0-.751-.067,5.326,5.326,0,0,0-1.049.072,1.84,1.84,0,0,1-.459.014H4.709c-.025,0-.047.037-.07.035A15.624,15.624,0,0,1,6.532,49.131Zm-2.57-.559A7.437,7.437,0,0,1,2,48.035a1.278,1.278,0,0,1-.676-.609.64.64,0,0,1-.049-.217.453.453,0,0,1,.01-.084.224.224,0,0,1,.039.034c.589.6,1.2-.021,1.911-.021s.75.8.752,1.512a.562.562,0,0,0-.029-.078Z" transform="translate(-1.279 -41.946)" fill="#f4c811"/>
    </g>
  </g>
</svg>
				<p class="pl-5">Email@Example.com</p>



			</div>

				<div class="row pt-5 pl-5 pr-5">

			 <a class="pr-3 "data-toggle="modal" data-target="#exampleModal17" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

                                   <img src="img/WhatsApp.png" width="40" height="40" alt=""/>
<p class="pl-5">User Example</p>
			</div>
			   </div>
		  </div>





	    <div class="carousel-item pl-5 pr-5 pt-3 pb-5">


	        <div class="card pl-5 pr-5 pt-3  pb-5 ">

	           <div class="row pt-5 pl-5 pr-5">

				   <a class="pr-3" data-toggle="modal" data-target="#exampleModal18" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
				                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#E13138" class="bi bi-pinterest" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>


                <a href=""></a>

				<p class="pl-5">Email@Example.com</p>



			</div>

				<div class="row pt-5 pl-5 pr-5">


								   <a class="pr-3" data-toggle="modal" data-target="#exampleModal19" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

 <svg xmlns="http://www.w3.org/2000/svg" id="Snap_Chat" data-name="Snap Chat" width="40" height="40" viewBox="0 0 40 40">
  <circle id="Ellipse_24" data-name="Ellipse 24" cx="20" cy="20" r="20" fill="#625d52"/>
  <g id="snapchat" transform="translate(8.75 7.11)">
    <path id="Path_21" data-name="Path 21" d="M20.857,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038a5.316,5.316,0,0,0-2.234.5A5.056,5.056,0,0,0,7.3,4.4,5.867,5.867,0,0,0,6.031,6.242c-.447,1.055-.31,2.827-.31,4.255v0c0,.152.073.312.082.468a.619.619,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.633,2.633,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.369,4.369,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.829,1.829,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,20.857,17.638Z" transform="translate(0 0)" fill="#ffeb5a"/>
    <path id="Path_22" data-name="Path 22" d="M5.721,10.476V10.5c0,.152.073.312.082.468a.62.62,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.634,2.634,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.368,4.368,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.816,1.816,0,0,0,.46.015h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215.486.486,0,0,0-.392-.513c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.548,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.422,5.422,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038" transform="translate(0 0)" fill="#fcdf31"/>
    <path id="Path_23" data-name="Path 23" d="M40.932,17.657c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.421a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.387-.027-.405-.027L31,3.012V22.663l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.466,7.466,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.657Z" transform="translate(-20.075 -0.02)" fill="#f4c811"/>
    <path id="Path_24" data-name="Path 24" d="M40.932,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.4a5.713,5.713,0,0,0-2.326-.5l-.037.028c-.018,0,.21-.03-.115-.03,0,0,.325,0,0,0L31,2.89V22.644l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.638Z" transform="translate(-20.075)" fill="#f4c811"/>
    <ellipse id="Ellipse_10" data-name="Ellipse 10" cx="0.515" cy="0.543" rx="0.515" ry="0.543" transform="translate(5.686 21.804)" fill="#fcdf31"/>
    <ellipse id="Ellipse_11" data-name="Ellipse 11" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(4.114 21.747)" fill="#efab00"/>
    <ellipse id="Ellipse_12" data-name="Ellipse 12" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(3.029 19.745)" fill="#fcdf31"/>
    <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(2.759 21.461)" fill="#fcdf31"/>
    <ellipse id="Ellipse_14" data-name="Ellipse 14" cx="0.407" cy="0.429" rx="0.407" ry="0.429" transform="translate(15.17 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_15" data-name="Ellipse 15" cx="0.108" cy="0.114" rx="0.108" ry="0.114" transform="translate(16.255 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_16" data-name="Ellipse 16" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(17.23 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_17" data-name="Ellipse 17" cx="0.298" cy="0.315" rx="0.298" ry="0.315" transform="translate(18.477 21.461)" fill="#efab00"/>
    <ellipse id="Ellipse_18" data-name="Ellipse 18" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(19.127 19.974)" fill="#f4c811"/>
    <ellipse id="Ellipse_19" data-name="Ellipse 19" cx="0.19" cy="0.2" rx="0.19" ry="0.2" transform="translate(20.59 20.431)" fill="#f4c811"/>
    <ellipse id="Ellipse_20" data-name="Ellipse 20" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(7.094 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_21" data-name="Ellipse 21" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(8.125 22.204)" fill="#f4c811"/>
    <path id="Path_25" data-name="Path 25" d="M45.2,21.152A7.017,7.017,0,0,1,43.4,18.706l-.011-.024a.916.916,0,0,1-.094-.717,1.18,1.18,0,0,1,.687-.531c-2.3.887-.782,2.691.856,3.54C44.966,21.037,45.08,21.094,45.2,21.152Zm-2.38-9.142c-.189,2.456-.511,3.29.345,3.518-.014-.006-.033-.011-.045-.016.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,6.211,6.211,0,0,0-.517-.973C42.406,10.359,42.939,10.422,42.817,12.009Zm-.345,12.609c-.776-.318-.939.56-1.988,1.534l.127-.093h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.84,1.84,0,0,0,.459.014h.023c.025,0,.047.037.07.035a15.637,15.637,0,0,0-1.893-.73Zm2.57-.559A7.437,7.437,0,0,0,47,23.522a1.278,1.278,0,0,0,.676-.609.64.64,0,0,0,.049-.217.482.482,0,0,0-.01-.084.25.25,0,0,0-.039.034c-.589.6-1.2-.021-1.911-.021s-.75.8-.752,1.512a.606.606,0,0,1,.029-.078Z" transform="translate(-26.474 -4.545)" fill="#efab00"/>
    <g id="Group_47" data-name="Group 47" transform="translate(1.259 12.889)">
      <path id="Path_26" data-name="Path 26" d="M9.05,35.75A7.017,7.017,0,0,0,10.843,33.3l.011-.024a.916.916,0,0,0,.094-.717,1.18,1.18,0,0,0-.687-.531c2.3.887.783,2.691-.856,3.54-.124.064-.238.12-.354.178Z" transform="translate(-6.523 -32.032)" fill="#ffeb5a"/>
      <path id="Path_27" data-name="Path 27" d="M6.532,49.131c.776-.318.939.56,1.988,1.534l-.127-.093h0a3.5,3.5,0,0,0-1.4-.762,4.36,4.36,0,0,0-.751-.067,5.326,5.326,0,0,0-1.049.072,1.84,1.84,0,0,1-.459.014H4.709c-.025,0-.047.037-.07.035A15.624,15.624,0,0,1,6.532,49.131Zm-2.57-.559A7.437,7.437,0,0,1,2,48.035a1.278,1.278,0,0,1-.676-.609.64.64,0,0,1-.049-.217.453.453,0,0,1,.01-.084.224.224,0,0,1,.039.034c.589.6,1.2-.021,1.911-.021s.75.8.752,1.512a.562.562,0,0,0-.029-.078Z" transform="translate(-1.279 -41.946)" fill="#f4c811"/>
    </g>
  </g>
</svg>
				<p class="pl-5">Email@Example.com</p>



			</div>

				<div class="row pt-5 pl-5 pr-5">

			 <a class="pr-3 "data-toggle="modal" data-target="#exampleModal20" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

                                   <img src="{{asset('assets/img/WhatsApp.png')}}" width="40" height="40" alt=""/>
<p class="pl-5">User Example</p>



			</div>



			   </div>



        </div>


	    <div class="carousel-item  pl-5 pr-5 pt-3  pb-5">


	        <div class="card pl-5 pr-5 pt-3  pb-5 ">

	           <div class="row pt-5 pl-5 pr-5">

				   <a class="pr-3" data-toggle="modal" data-target="#exampleModal21" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
				                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#E13138" class="bi bi-pinterest" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>


                <a href=""></a>

				<p class="pl-5">Email@Example.com</p>



			</div>

				<div class="row pt-5 pl-5 pr-5">


								   <a class="pr-3" data-toggle="modal" data-target="#exampleModal22" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

 <svg xmlns="http://www.w3.org/2000/svg" id="Snap_Chat" data-name="Snap Chat" width="40" height="40" viewBox="0 0 40 40">
  <circle id="Ellipse_24" data-name="Ellipse 24" cx="20" cy="20" r="20" fill="#625d52"/>
  <g id="snapchat" transform="translate(8.75 7.11)">
    <path id="Path_21" data-name="Path 21" d="M20.857,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038a5.316,5.316,0,0,0-2.234.5A5.056,5.056,0,0,0,7.3,4.4,5.867,5.867,0,0,0,6.031,6.242c-.447,1.055-.31,2.827-.31,4.255v0c0,.152.073.312.082.468a.619.619,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.633,2.633,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.369,4.369,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.829,1.829,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,20.857,17.638Z" transform="translate(0 0)" fill="#ffeb5a"/>
    <path id="Path_22" data-name="Path 22" d="M5.721,10.476V10.5c0,.152.073.312.082.468a.62.62,0,0,1-.3.065,2.038,2.038,0,0,1-.878-.252.733.733,0,0,0-.332-.073,1.151,1.151,0,0,0-.6.176.865.865,0,0,0-.421.571.812.812,0,0,0,.286.74,2.444,2.444,0,0,0,.745.45c.085.035.186.069.293.1.37.124.93.311,1.077.673a.912.912,0,0,1-.094.716l-.011.024a7.006,7.006,0,0,1-1.007,1.645,5.732,5.732,0,0,1-1.215,1.131,4.332,4.332,0,0,1-1.707.7.487.487,0,0,0-.391.514.676.676,0,0,0,.047.214v0a1.283,1.283,0,0,0,.677.611,7.473,7.473,0,0,0,1.956.538,2.634,2.634,0,0,1,.119.453c.033.159.067.321.115.494a.518.518,0,0,0,.536.412,2.437,2.437,0,0,0,.46-.067,4.933,4.933,0,0,1,1.049-.126,4.368,4.368,0,0,1,.751.067,3.5,3.5,0,0,1,1.4.763,4.413,4.413,0,0,0,2.763,1.134c.034,0,.067,0,.1,0s.091,0,.145,0a4.412,4.412,0,0,0,2.762-1.134h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.816,1.816,0,0,0,.46.015h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215.486.486,0,0,0-.392-.513c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.548,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.758,5.758,0,0,0-1.223-1.848A5.006,5.006,0,0,0,13.728,3.4a5.422,5.422,0,0,0-2.286-.474h-.049c-.123,0-.38-.038-.4-.038" transform="translate(0 0)" fill="#fcdf31"/>
    <path id="Path_23" data-name="Path 23" d="M40.932,17.657c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.421a5.426,5.426,0,0,0-2.286-.474h-.049c-.123,0-.387-.027-.405-.027L31,3.012V22.663l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.466,7.466,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.657Z" transform="translate(-20.075 -0.02)" fill="#f4c811"/>
    <path id="Path_24" data-name="Path 24" d="M40.932,17.638c-2.674-.464-3.878-3.354-3.927-3.476l-.011-.024a.916.916,0,0,1-.094-.717c.146-.362.706-.549,1.076-.672.108-.036.209-.069.293-.1a2.232,2.232,0,0,0,.8-.5.816.816,0,0,0,.243-.575.9.9,0,0,0-.642-.785,1.093,1.093,0,0,0-.435-.087.933.933,0,0,0-.4.087,2.2,2.2,0,0,1-.834.25.737.737,0,0,1-.276-.064c.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,5.759,5.759,0,0,0-1.223-1.848A5.006,5.006,0,0,0,33.8,3.4a5.713,5.713,0,0,0-2.326-.5l-.037.028c-.018,0,.21-.03-.115-.03,0,0,.325,0,0,0L31,2.89V22.644l.141,0c.034,0,.1,0,.132,0s.107,0,.16,0a4.434,4.434,0,0,0,2.77-1.134h.005a3.5,3.5,0,0,1,1.4-.762,4.371,4.371,0,0,1,.752-.067,5.328,5.328,0,0,1,1.05.072,1.834,1.834,0,0,0,.46.014h.023a.474.474,0,0,0,.514-.359c.047-.169.081-.306.114-.467a2.57,2.57,0,0,1,.119-.44,7.467,7.467,0,0,0,1.957-.532,1.274,1.274,0,0,0,.676-.606.632.632,0,0,0,.049-.215A.485.485,0,0,0,40.932,17.638Z" transform="translate(-20.075)" fill="#f4c811"/>
    <ellipse id="Ellipse_10" data-name="Ellipse 10" cx="0.515" cy="0.543" rx="0.515" ry="0.543" transform="translate(5.686 21.804)" fill="#fcdf31"/>
    <ellipse id="Ellipse_11" data-name="Ellipse 11" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(4.114 21.747)" fill="#efab00"/>
    <ellipse id="Ellipse_12" data-name="Ellipse 12" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(3.029 19.745)" fill="#fcdf31"/>
    <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="0.244" cy="0.257" rx="0.244" ry="0.257" transform="translate(2.759 21.461)" fill="#fcdf31"/>
    <ellipse id="Ellipse_14" data-name="Ellipse 14" cx="0.407" cy="0.429" rx="0.407" ry="0.429" transform="translate(15.17 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_15" data-name="Ellipse 15" cx="0.108" cy="0.114" rx="0.108" ry="0.114" transform="translate(16.255 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_16" data-name="Ellipse 16" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(17.23 21.861)" fill="#f4c811"/>
    <ellipse id="Ellipse_17" data-name="Ellipse 17" cx="0.298" cy="0.315" rx="0.298" ry="0.315" transform="translate(18.477 21.461)" fill="#efab00"/>
    <ellipse id="Ellipse_18" data-name="Ellipse 18" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(19.127 19.974)" fill="#f4c811"/>
    <ellipse id="Ellipse_19" data-name="Ellipse 19" cx="0.19" cy="0.2" rx="0.19" ry="0.2" transform="translate(20.59 20.431)" fill="#f4c811"/>
    <ellipse id="Ellipse_20" data-name="Ellipse 20" cx="0.163" cy="0.172" rx="0.163" ry="0.172" transform="translate(7.094 21.232)" fill="#f4c811"/>
    <ellipse id="Ellipse_21" data-name="Ellipse 21" cx="0.271" cy="0.286" rx="0.271" ry="0.286" transform="translate(8.125 22.204)" fill="#f4c811"/>
    <path id="Path_25" data-name="Path 25" d="M45.2,21.152A7.017,7.017,0,0,1,43.4,18.706l-.011-.024a.916.916,0,0,1-.094-.717,1.18,1.18,0,0,1,.687-.531c-2.3.887-.782,2.691.856,3.54C44.966,21.037,45.08,21.094,45.2,21.152Zm-2.38-9.142c-.189,2.456-.511,3.29.345,3.518-.014-.006-.033-.011-.045-.016.007-.132.015-.267.024-.408l0-.06a11.008,11.008,0,0,0-.255-4.261,6.211,6.211,0,0,0-.517-.973C42.406,10.359,42.939,10.422,42.817,12.009Zm-.345,12.609c-.776-.318-.939.56-1.988,1.534l.127-.093h0a3.5,3.5,0,0,1,1.4-.762,4.36,4.36,0,0,1,.751-.067,5.326,5.326,0,0,1,1.049.072,1.84,1.84,0,0,0,.459.014h.023c.025,0,.047.037.07.035a15.637,15.637,0,0,0-1.893-.73Zm2.57-.559A7.437,7.437,0,0,0,47,23.522a1.278,1.278,0,0,0,.676-.609.64.64,0,0,0,.049-.217.482.482,0,0,0-.01-.084.25.25,0,0,0-.039.034c-.589.6-1.2-.021-1.911-.021s-.75.8-.752,1.512a.606.606,0,0,1,.029-.078Z" transform="translate(-26.474 -4.545)" fill="#efab00"/>
    <g id="Group_47" data-name="Group 47" transform="translate(1.259 12.889)">
      <path id="Path_26" data-name="Path 26" d="M9.05,35.75A7.017,7.017,0,0,0,10.843,33.3l.011-.024a.916.916,0,0,0,.094-.717,1.18,1.18,0,0,0-.687-.531c2.3.887.783,2.691-.856,3.54-.124.064-.238.12-.354.178Z" transform="translate(-6.523 -32.032)" fill="#ffeb5a"/>
      <path id="Path_27" data-name="Path 27" d="M6.532,49.131c.776-.318.939.56,1.988,1.534l-.127-.093h0a3.5,3.5,0,0,0-1.4-.762,4.36,4.36,0,0,0-.751-.067,5.326,5.326,0,0,0-1.049.072,1.84,1.84,0,0,1-.459.014H4.709c-.025,0-.047.037-.07.035A15.624,15.624,0,0,1,6.532,49.131Zm-2.57-.559A7.437,7.437,0,0,1,2,48.035a1.278,1.278,0,0,1-.676-.609.64.64,0,0,1-.049-.217.453.453,0,0,1,.01-.084.224.224,0,0,1,.039.034c.589.6,1.2-.021,1.911-.021s.75.8.752,1.512a.562.562,0,0,0-.029-.078Z" transform="translate(-1.279 -41.946)" fill="#f4c811"/>
    </g>
  </g>
</svg>
				<p class="pl-5">Email@Example.com</p>
			</div>
				<div class="row pt-5 pl-5 pr-5">
			 <a class="pr-3 "data-toggle="modal" data-target="#exampleModal23" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7B8794" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>

                                   <img src="img/WhatsApp.png" width="40" height="40" alt=""/>
<p class="pl-5">User Example</p>
			</div>
			   </div>
  </div>
 		<a class="carousel-control-prev " href="#carouselExampleIndicators3" role="button" data-slide="prev" > <span class="carousel-control-prev-icon pl-5" aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a>
	</div>
        <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel15" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel16" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel17" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel18" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel19" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel21" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>



	</div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="email" class="form-control" placeholder="Enter Email">


		  </div>






      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
  </div>
</div>

        <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel22" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">
	<p class="text-center">Edit Contact</p>
	</div>
	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">
		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>
	</div>
		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">
		   <input type="email" class="form-control" placeholder="Enter Email">
		  </div>
      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">
       <button type="button" class="btn btn-light">Reset</button>
	   <button type="button" class="btn btn-warning">Save Contact</button>

      </div>
    </div>
  </div>
</div>




        <div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel23" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Edit Contact</p>

	</div>





	 <div class="row pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		<select class="form-control" id="exampleFormControlSelect1" >
      <option>Select Social Media</option>
      <option>Facebook</option>
      <option>Instagram</option>
      <option>Twitter</option>
      <option>Snapchat</option>
    </select>
	</div>
		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">
		   <input type="email" class="form-control" placeholder="Enter Email">
		  </div>
      </div>
      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Save Contact</button>



      </div>
    </div>
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


</script>
</body>
</html>
