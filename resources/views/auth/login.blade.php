@extends('layouts.login')

@section('content')
<div class="animate form login_form">
	<section class="login_content">
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<h1>Login Form</h1>
			<div>
				@if(count($errors->all()) > 0)
					<ul class="parsley-errors-list filled">
					@foreach ($errors->all() as $message)
						{{ $message }}
					@endforeach
					</ul>
    		@endif
			</div>
			<div>
				<input maxlength="255" id="email" type="email" class="form-control{{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
			</div>
			<div>
				<input mixlength="8" id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' parsley-error' : '' }}" name="password" required>
			</div>
			<div>
				<button type="submit" class="btn btn-default submit">
					Log in
				</button>
				<a class="reset_pass" href="#">Lost your password?</a>
			</div>

			<div class="clearfix"></div>

			<div class="separator">
				<p class="change_link">New to site?
					<a href="{{ route('register') }}" class="to_register"> Create Account </a>
				</p>

				<div class="clearfix"></div>
				<br />

				<div>
					<h1><i class="fa fa-paw"></i> Siimanto[dot]com</h1>
					<p>©2018 All Rights Reserved. Privacy and Terms</p>
				</div>
			</div>
		</form>
	</section>
</div>
<?php /*
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>

				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' parsley-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
								<span class="parsley-errors-list filled">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' parsley-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password" required>

								@if ($errors->has('password'))
								<span class="parsley-errors-list filled">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Login
								</button>

								<a class="btn btn-link" href="{{ route('password.request') }}">
									Forgot Your Password?
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
*/?>
@endsection
