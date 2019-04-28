@extends('layouts.frontend')

@section('content')
<div class="row">
	@foreach($products as $product)
	<div class="col-md-4">
		<div class="card mb-4 shadow-sm">
			<img src="{{ $product->photos->first()->image}}" alt="">
			<div class="card-body">
				<p class="card-text">{{$product->name}}</p>
				<div class="d-flex justify-content-between align-items-center">
					<div class="btn-group">
						<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
					</div>
					<small class="text-muted">{{ $product->sales_price}}</small>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>


@stop