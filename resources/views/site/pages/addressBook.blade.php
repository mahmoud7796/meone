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
    <title>Adderess Book</title>
  </head>



<body>

	<div class="container-fluid">

@include('site.includes.header')

	<section class="mt-5 pt-5 pb-5 mb-5">


	 <div class="row pt-5 mt-5  d-flex justify-content-center font-weight-bold" style="font-size: 22px">

	<p class="text-center">Your Address Book</p>

	</div>



	<div class="row pt-3 mt-3  d-flex justify-content-center">

      <div class="col-md-3 col-sm-6">


		<div class="input-group rounded">

 <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
  <input type="search" class="form-control" id="searchinput" placeholder="Search Address Book" aria-label="Search"
  aria-describedby="search-addon" />

</div>


		</div>

	   </div>



	<div class="row d-flex justify-content-center">

	                 <div class="col-md-12  ">


		<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
  </ol>



	  <div class="carousel-inner"  role="listbox">




	 <div class="carousel-item pl-5 ml-5 pr-5 mr-5 pt-5 pb-5   active">


	        <div class="card col-md-8 pt-5 pb-5 mx-auto ">



	      <div class="row pt-5 align-items-center ">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>

	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


<p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>


	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>





			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>





		   </div>



		  </div>




	    <div class="carousel-item  pl-5 ml-5 pr-5 mr-5 pt-5 pb-5  ">



	  <div class="card col-md-8 pt-5 pb-5 mx-auto ">



	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>





			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>

	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


<p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>


	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>





			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>





		   </div>




        </div>


	    <div class="carousel-item  pl-5 ml-5 pr-5 mr-5 pt-5 pb-5">


	        <div class="card col-md-8 pt-5 pb-5 mx-auto ">



	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>





			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>

	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


<p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">


		<img src="{{asset('assets/img/Address Book Person 2.png')}}" width="72" height="72" alt=""/>


			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>


	      <div class="row pt-5 align-items-center">




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row align-items-center">



		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>





			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>



			  </div>




		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>



		<div class="col-md-4 pt-5 mt-5 ">

			<div class="row  align-items-center">

		  <img src="{{asset('assets/img/Address Book Person.png')}}" width="72" height="72" alt=""/>

			  <p class="pl-3 pr-3" style="font: normal normal bold 20px/37px Cairo; color: #616E7C;">Name Example</p>

			</div>

			  </div>





				</div>





		   </div>



  </div>



 		<a class="carousel-control-prev " href="#carouselExampleIndicators1" role="button" data-slide="prev" > <span class="carousel-control-prev-icon pl-5" aria-hidden="true" ></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a>


	</div>



			   </div>



			   </div>



	                 </div>


	</div>



	</section>

	</div>





<script src="{{('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('assets//popper.min.js')}}"></script>
<script src="{{('assets//bootstrap.js')}}"></script>
</body>
</html>
