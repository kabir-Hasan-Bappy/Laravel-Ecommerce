@extends('layouts.frontend')

@section('content')

<div class="row">
	<div class="col-md-12">
		
		@if($errors->any())

		<div class="alert alert-warning">
			<ul>
				@foreach($errors->all() as $error)
				<li>
					{{ $error}}

				</li>
				@endforeach
			</ul>
		</div>

		@endif

		@if(session()->has('message'))
		<div class="alert alert-info">
			{{ session('message') }}
		</div>

		@endif


		<form action="{{ route('register') }} " method="post">

			@csrf 

			<div class="form-group">
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}">
			</div>

			<div class="form-group">
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old('email') }}">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
			</div>

			<button type="submit" class="btn btn-primary btn-block">Register</button>
		</form>
	</div>
</div>

@stop