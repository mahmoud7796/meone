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
    <title>login Page</title>
  </head>

<body>
<section class="row">
	<div class="col col-sm ">
	</div>

  <div class="col col-sm ml-5 pl-5" id="col1" >
	<div class="container">
		<div class="row mt-5 pl-5 mb-5 pb-5">
	  <img src="{{asset('assets/img/logo.png')}}" width="80" height="80" alt=""/>
		</div>
		<div class="row mt-5 mb-5 pb-5 ">
	  <img src="{{asset('assets/img/Sign in ~ Register Illustration.png')}}" width="263" height="241" alt=""/>
		</div>
		<div class="row mt-5 mb-5 pb-5 pr-5">
		<p class="font-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted" id="text1">1Me will Keep your Contacts Secured in our Data base</p>
		</div>

	  </div>

  </div>

	<div class="col col-8 ">

		 <div class="row ml-5 pl-5 pt-5 ">

		<div class="col d-flex justify-content-end pr-5 ">
			 <button type="button" class="btn btn-secondary"> AR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
</svg></button>
			</div>
		</div>

	    <div class="row ml-5 pl-5 ">

		<div class="col d-flex justify-content-center text-center ">
			<h5 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo mt-5">Login to your Account</h5>
			</div>
		</div>

		<div class="row ml-5 pl-5">

		<div class="col d-flex justify-content-center text-center ">
			<p class="efont-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">Access, Manage and Share your Contacts with Ease</p>
			</div>
		</div>
        @include('site.includes.alerts.errors')
        @include('site.includes.alerts.success')
		<div class="row pr-5">

		<div class="col pl-5 mt-5">
			<form action="{{route('site.postLogin')}}" method="post">
                @csrf
                <div class="form-group">
    <label for="exampleFormControlInput1" class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo">Login by Email</label>

   <input type="email" value="{{old('email')}}" name="email" class="form-control mt-5 " id="exampleFormControlInput1" placeholder="Email Address">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
  </div>
			<div class="form-group">
    <input type="password" name="password" class="form-control " id="exampleFormControlInput6" placeholder="Password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
  </div>
					<div class="form-group">
    <button type="submit" class="btn btn-warning mt-3">Login</button>
  </div>

			</form>

			</div>

		<div class="col pr-5 ">
			<form >
			<div class="row ml-5 pl-5 ">
		<div class="col d-flex justify-content-center text-center ">
			<h5 class="display-5 font-style-normal font-weight-bold font-size-36 line-spacing-68 font-family-cairo mt-5">OR</h5>
			</div>
		</div>

				<div class="row ml-5 pl-5">

		<div class="col d-flex justify-content-center text-center ">
			<p class="efont-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">Login with Social Media</p>
			</div>
		</div>

				<div class="row ml-5 pl-5 ">
		<div class="col d-flex justify-content-center text-center ">
            <a href="{{route('facebook.redirect','facebook')}}">
			<button type="button" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg> Continue with Facebook
            </button>
            </a>
			</div>
		</div>

				<div class="row ml-5 pl-5 mt-3 ">
		<div class="col d-flex justify-content-center text-center ">
			<button type="button" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg> Continue with Twitter </button>
			</div>
		</div>

					<div class="row ml-5 pl-5 mt-3 ">
		<div class="col d-flex justify-content-center text-center ">
			<button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
</svg> Continue with Gmail</button>
			</div>
		</div>



			</form>

			</div>


	</div>


		<div class="row ml-5 pl-5 mt-5 ">
		<div class="col d-flex justify-content-center text-center ">
			<p class="font-style-normall font-size-18 line-spacing-33 font-family-cairo text-muted">
				Don't Have an Account ?
			<a href="{{route('site.register')}}">Create an Account</a>

			</p>
			</div>
		</div>

	</div>





	</section>








<script src="js/bootstrap.js"></script>

</body>
</html>
