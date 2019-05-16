@extends('layouts.backend')

@section('content')

<div class="alert alert-info">
	
	You have been logged in as {{ optional(auth()->user())->first_name}} {{ optional(auth()->user())->last_name}}
</div>


@stop