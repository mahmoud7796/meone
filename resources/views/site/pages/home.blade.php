<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	  <style type="text/css">
	  @import url({{asset('assets/css/style.css')}});

	  body {



}
      </style>
    <title>Main Page</title>
  </head>
  <body>



@include('site.includes.header')

	  <section class="row mb-5 align-items-center">
    <div class="col col-md-5 mt-5 pl-5">
      <h2 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo ">All your Contacts in <span class="text-primary">one Place</span></h2>
      <h1 class="lead font-style-normal font-weight-normal font-size-20 line-spacing-68 font-family-cairo text-muted mt-5">
This is Home Page  </h1>

		<h5 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo mt-5">Always Changing your Contacts?</h5>
		 <p class="lead font-style-normal font-weight-normal font-size-20 line-spacing-68 text-muted font-family-cairo ">
   Let 1Me Handle Telling your Friends About it
      </p>

    </div>
    <div class="col col-md-7 text-center ">
        <img class="img-fluid mt-5 mx-auto pl-5" src="{{asset('assets/img/Landing Page Hero.png')}}" alt="">
    </div>
  </section>




<script src="{{asset('assets/js/bootstrap.js')}}"></script>

  </body>
</html>
