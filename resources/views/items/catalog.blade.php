@extends('layouts.app')

@section('content')

<p>@if(Session::has('success_message'))
			<div class="alert alert-success">
				{{ Session::get('success_message') }}
			</div>
			
		@endif
</p>
<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto mb-5">
				<a href="/menu/catalog" class="btn btn-outline-secondary">All</a>
					@foreach(\App\Category::all() as $category)
						<a href="/menu/categories/{{$category->id}}" class="btn btn-outline-secondary btn-primary">{{$category->name}}
						</a>
					@endforeach
			</div>
		</div>

	<div class="row">

		
		@foreach($items as $item)
		<div class="col-md-6">
			<div class="card text-center shadow-sm catalog-card mb-5 height-card">	
				<img src="/{{$item->image_url}}" class="card-img-top" alt="...">
				<div class="card-body">
		    		<h5 class="card-title">{{$item->name}}</h5>
		   			<p class="card-text">{{$item->price}} / day</p>
		    		<a href="/product/{{$item->id}}/details" class="btn btn-outline-secondary input-width">View</a>
		    	@auth
		    	<form action="/cart/{{ $item->id }}" method="post">
		    		@csrf
		    		<label for="quantity"></label>
		    		<input type="number" name="quantity" class="form-control text-center input-width mx-auto mb-3" min="1" value="1">
		    		<button class="btn btn-outline-secondary input-width" type="submit">Book now</button>
		    	</form>
		    	@endauth
		    	</div>
		    	<div class="card-footer">
		    		<p><small class="text-muted">{{$item->category->name}}</small></p>
		    	</div>
			</div>
		</div>
		@endforeach
	</div>
</div>


@endsection
