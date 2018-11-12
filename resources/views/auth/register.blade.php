@extends('layouts.login')

@section('content')
<div class="animate form login_form">
	<section class="login_content">
		<form class="form-horizontal" data-parsley-validate method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<h1>Create Account</h1>
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
				<input maxlength="255" id="name" type="text" class="form-control{{ $errors->has('name') ? ' parsley-error' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
			</div>
			<div>
				<input maxlength="255" id="email" type="email" class="form-control{{ $errors->has('email') ? ' parsley-error' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
			</div>
			<div>
				<input data-parsley-equalto="#password-confirm" minlength="8" id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' parsley-error' : '' }}" name="password" required>
			</div>
			<div>
				<input data-parsley-equalto="#password" minlength="8" id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
			</div>
			<div>
				<button type="submit" class="btn btn-default submit">Register</button>
			</div>

			<div class="clearfix"></div>

			<div class="separator">
				<p class="change_link">Already a member ?
					<a href="{{ route('login') }}" class="to_register"> Log in </a>
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
				<div class="panel-heading">Register</div>

				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password" required>

								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>*/?>
@endsection
