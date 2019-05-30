@extends('layouts.admin_layout')

@section('title', 'Admin | Product Details')

@section('navtitle', 'Admin Product Details')


@section('admin_content')




<div class="container-fluid">
	<div class="row">
		<div class="offset-md-2 col-md-6">
			
		</div>
		
	</div>
		
	<div class="row">
		<!-- sidenav -->
		<div class="col-md-2">
			
		@include('admin_nav')
		
		</div>
	<!-- end sidenav -->

			<div class="col-md-8">

			<form action="/admin/catalog_admin/{{$item->id}}/edit" method="post" enctype="multipart/form-data">
			@csrf
			{{ method_field('PATCH') }}

					
					<!-- title & description -->

					<div class="card shadow mb-4">
					  <div class="card-body">
				  			<div class="form-group">
				  				<label for="name">Title:</label>
				  				<input type="text" name="name" id="name" class="form-control" value="{{$item->name}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="description">Description</label>
				  				<input type="text" name="description" id="description" class="form-control" value="{{$item->description}}" style="height:20vh;">
				  			</div>
					  </div>
					</div>


					<!-- price & qty -->

					<div class="card shadow mb-4">
					  <div class="card-body">
				  			<div class="form-group">
				  				<label for="price">Price</label>
				  				<input type="number" name="price" id="price" class="form-control" value="{{$item->price}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="quantity">Quantity</label>
				  				<input type="number" name="quantity" id="quantity" class="form-control" value="{{$item->quantity}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="category">Category</label>
				  				<select name="category" id="category" class="form-control">
				  					@foreach($categories as $category)
				  						<option value="{{ $category->id }}"
				  							{{ $category->id == $item->category_id ? "selected" : ""}} > {{ $category->name }}</option>
				  					@endforeach
				  				</select>
				  			</div>
					  </div>
					</div>
					<!-- image -->
					<div class="card shadow mb-4">
					  <div class="card-body">
			 			<div class="form-group">
			  				<label for="title">Images</label>
			  			</div>
			  			<div class="form-group mb-5">
							<div class="custom-file">
								<label for="image" class="custom-file-label pb-3">Upload Image</label>
								<input type="file" name="image" id="image" class="custom-file-input">
							</div>
								<img src="/{{$item->image_url}}" alt="" class="card-image m-5" style="width:10%;">
						</div>
					  </div>
					</div>

					<div class="row mb-2">
						<div class="col-md-10">
							<a href="/admin/catalog_admin" class="btn btn-outline-secondary">Cancel</a>
						</div>
						<div class="col-md-2 d-flex flex-row">
							<button type="submit" class="btn btn-outline-secondary btn-block">Save</button>
						</div>
					</div>
			</form>
			

			<div class="row mb-2">
					<div class=" offset-md-10 col-md-2">
					<form action="/admin/catalog_admin/{{$item->id}}/delete" method="post">
						@csrf
						{{ method_field('DELETE')}}
						<button type="submit" class="btn btn-outline-danger btn-block deleteButton" data-toggle="modal" name="{{$item->name}}" data-id="{{$item->id}}" data-target="#confirmDelete">Delete</button>
					</form>
						
					</div>
				</div>


		</div>
	</div>
</div>
			 


@endsection