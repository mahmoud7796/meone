<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
	  <style type="text/css">
	  @import url("{{asset('assets/css/style.css')}}");

	  body {

}
      </style>
    <title>profile</title>
  </head>



<body>

	<div class="container-fluid">

@include('site.includes.header')

	<section class="pt-5 mt-5">


	 <div class="row pt-5 mt-5  d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<p class="text-center">Your Profile</p>

	</div>


	 <div class="row pt-5   d-flex justify-content-center font-weight-bold" style="font-size: 22px">

      <img src="{{asset('assets/img/Profile Page Avatar.png')}}" width="120" height="120" alt=""/>


		</div>


	 <div class="row pt-3  d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<p class="text-center text-muted">{{$user->firstName.' '.$user->middleName}}</p>

	</div>




	 <div class="row pt-5   d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<p class="text-center">Stats</p>

	</div>




	 <div class="row  pt-5  align-items-center" >


		 <div class="col-md-4 pl-5 pr-5 pb-5 ">

		 <div class="card col-md-8 col-sm-12 pb-5 pt-5 mx-auto" id="card1">
             <div class="card-body">


				 <div class="row d-flex justify-content-center align-items-center">

				   <p class="pl-5 pr-5" id="cardp" style="font: normal normal normal 18px/33px Cairo; color: #0D67CB;">Friends</p>

				 </div>


	      <div class="row d-flex justify-content-center align-items-center ">



		<div class="col-6 pl-5 ">

			  <img src="{{asset('assets/img/Friends Icon.png')}}" width="64" height="64" alt=""/>


			  </div>

		<div class="col-6 ">

			 <p class="" style="font: normal normal bold 40px/75px Cairo; color: #3E4C59;">0</p>



		    </div>



			</div>

			</div>

		 </div>



			 </div>


		 <div class="col-md-4  pl-5 pr-5 pb-5 ">

		 <div class="card col-md-8 col-sm-12 pb-5 pt-5 mx-auto" id="card2">
             <div class="card-body">


				 <div class="row d-flex justify-content-center align-items-center">

				   <p class="pl-5 pr-5" id="cardp" style="font: normal normal normal 18px/33px Cairo; color: #DB9B1A;">Cards</p>

				 </div>


	      <div class="row d-flex justify-content-center align-items-center ">



		<div class="col-6 pl-5 ">

			 <img src="{{asset('assets/img/Cards Icon.png')}}" width="64" height="64" alt=""/> </div>

		<div class="col-6 ">

			 <p class="" style="font: normal normal bold 40px/75px Cairo; color: #3E4C59;">{{$cards}}</p>



		    </div>



			</div>

			</div>

		 </div>



			 </div>



		 <div class="col-md-4 pl-5 pr-5 pb-5 ">

		 <div class="card  col-md-8 col-sm-12 pb-5 pt-5 mx-auto" id="card1">
             <div class="card-body">


				 <div class="row d-flex justify-content-center align-items-center">

				   <p class="pl-5 pr-5" id="cardp" style="font: normal normal normal 18px/33px Cairo; color: #0D67CB;">Contacts</p>

				 </div>


	      <div class="row  d-flex justify-content-center align-items-center ">



		<div class="col-6 pl-5 ">

			 <img src="{{asset('assets/img/Contacts Icon.png')}}" width="64" height="64" alt=""/> </div>

		<div class="col-6 ">

			 <p class="" style="font: normal normal bold 40px/75px Cairo; color: #3E4C59;">{{$contacts}}</p>



		    </div>



			</div>

			</div>

		 </div>



			 </div>





	</div>







      <div class="row pt-5   d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<p class="text-center">Profile Information</p>

	</div>





      <div class="row pt-5  d-flex justify-content-center font-weight-bold" style="font-size: 22px">

        <div class="col-md-3 col-sm-6 pb-5">



		<div class="input-group rounded">
 <span class="input-group-text border-0" >
   <img src="{{asset('assets/img/UserName Icon.png')}}" width="24" height="24" alt=""/> </span>
  <input type="text" disabled class="form-control" value="{{$user->firstName}}" placeholder="Name Examble" aria-label="name"
   />

</div>



		  </div>

	    <div class="col-md-3 col-sm-6  ">


		<div class="input-group rounded">
 <span class="input-group-text border-0" >
    <img src="{{asset('assets/img/Email Address Icon.png')}}" width="24" height="24" alt=""/> </span>
  <input disabled type="email" value="{{$user->email}}" class="form-control " placeholder="Email@Example.com" aria-label="email"
 />

</div>



		  </div>


	</div>





	 <div class="row pt-5 mb-5 pb-5 d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal2">Change your Password</button>


        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



		   <div class="row  d-flex justify-content-center " style="font: normal normal bold 24px/45px Cairo; color: #0D67CB">

	<p class="text-center">Change your Password</p>

	</div>






		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="password" class="form-control" placeholder="Old Password">


		  </div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="password" class="form-control" placeholder="New Password">


		  </div>



		<div class="row mt-3 pl-3 pr-3 mr-3 ml-3 d-flex justify-content-center">

		   <input type="password" class="form-control" placeholder="Confirm New Password">


		  </div>




      </div>

      <div class="modal-footer pr-5 pt-5 pb-5">


       <button type="button" class="btn btn-light">Reset</button>

	   <button type="button" class="btn btn-warning">Change</button>



      </div>
    </div>
  </div>
</div>



	</div>



	</section>


	</div>


<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>
</html>
