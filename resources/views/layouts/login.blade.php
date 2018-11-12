<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Siimanto.com | </title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="{{ asset('gentelella/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('gentelella/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('gentelella/nprogress/nprogress.css') }}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="/css/custom.min.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="{{ asset('gentelella/animate.css/animate.min.css') }}" rel="stylesheet">
</head>

<body class="login">
	<div>
		<a class="hiddenanchor" id="signup"></a>
		<a class="hiddenanchor" id="signin"></a>
		<div class="login_wrapper">
			@yield('content')
		</div>
	</div>
	<!-- Scripts -->
	<script src="{{ asset('gentelella/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('gentelella/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('gentelella/parsleyjs/dist/parsley.min.js') }}"></script>
</body>
</html>
<?php /*
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
		<div id="app">
				<nav class="navbar navbar-default navbar-static-top">
						<div class="container">
								<div class="navbar-header">

										<!-- Collapsed Hamburger -->
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
												<span class="sr-only">Toggle Navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button>

										<!-- Branding Image -->
										<a class="navbar-brand" href="{{ url('/') }}">
												{{ config('app.name', 'Laravel') }}
										</a>
								</div>

								<div class="collapse navbar-collapse" id="app-navbar-collapse">
										<!-- Left Side Of Navbar -->
										<ul class="nav navbar-nav">
												&nbsp;
										</ul>

										<!-- Right Side Of Navbar -->
										<ul class="nav navbar-nav navbar-right">
												<!-- Authentication Links -->
												@if (Auth::guest())
														<li><a href="{{ route('login') }}">Login</a></li>
														<li><a href="{{ route('register') }}">Register</a></li>
												@else
														<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																		{{ Auth::user()->name }} <span class="caret"></span>
																</a>

																<ul class="dropdown-menu" role="menu">
																		<li>
																				<a href="{{ route('logout') }}"
																						onclick="event.preventDefault();
																										 document.getElementById('logout-form').submit();">
																						Logout
																				</a>

																				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																						{{ csrf_field() }}
																				</form>
																		</li>
																</ul>
														</li>
												@endif
										</ul>
								</div>
						</div>
				</nav>

				@yield('content')
		</div>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
*/?>