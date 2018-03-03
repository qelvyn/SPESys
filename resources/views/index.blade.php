<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SPESys</title>

	{{--  JQuery  --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/SPESys-LogoB-64x64.png')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('../vendor/bootstrap/css/bootstrap.min.css')}}">
	{{--  <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">  --}}
	<link rel="stylesheet" type="text/css" href="{{asset('../vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('../vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-55">
						SPESys
					</span>
					<span class="login100-form-subtitle p-b-55">
						Self & Peer Evaluation System
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Valid UserID is required">
						<input class="input100" type="text" name="userid" placeholder="UserID">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
				<div class="text-link">
					<p>
						<a href="#"> Forgot Password?</a>
					</p>
				</div>
			</div>
		</div>
	</div>



	<script src="{{('../vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{('../vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{('../vendor/select2/select2.min.js')}}"></script>
	<script src="js/main.js"></script>

</body>

</html>