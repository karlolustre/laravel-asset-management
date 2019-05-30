@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow-lg">
			<div class="row">
				<div class="col-md-2 m-2">
				<a href="/menu/catalog" class="btn btn-outline-secondary">Back</a>
					
				</div>
			</div>
			  <div class="row no-gutters">
			    <div class="col-md-6">
			      <img src="/{{ $item->image_url}}" class="card-img ml-4" alt="..." >
			    </div>
			    <div class="col-md-6">
			      <div class="card-body">
			        <h5 class="card-title">{{ $item->name }}</h5>
			        <p class="card-text">{{ $item->description }}</p>
			        <p class="card-text"> {{ $stockLevel }} </p>
			        <p class="card-text">{{ $item->price }}</p>
			        <p class="card-text"><small class="text-muted"></small></p>
			      </div>
			      	<div class="col-md-4 mx-auto">
			      @auth
			      	<form action="/cart/{{ $item->id }}" method="post">
			      		@csrf
			    		<label for="quantity"></label>
			    		<input type="number" name="quantity" class="form-control text-center mb-2" min="1" value="1">
			    		<button class="btn btn-outline-primary border-primary btn-block" type="submit">Book now</button>
		    		</form>
		    		@endauth
			      	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection