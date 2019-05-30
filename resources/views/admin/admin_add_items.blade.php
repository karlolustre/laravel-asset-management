@extends('layouts.admin_layout')
@section('title', 'Admin | Add Product')
@section('navtitle', 'Admin Add Product')

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

				

			<form action="/admin/catalog_admin/add_product" method="post" enctype="multipart/form-data">
				@csrf
				

					<!-- title & description -->
					<div class="card shadow mb-3">
					  <div class="card-body">
				  			<div class="form-group">
				  				<label for="name">Title:</label>
				  				<input type="text" name="name" id="name" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="description">Description</label>
				  				<input type="text" name="description" id="description" class="form-control">
				  			</div>
					  </div>
					</div>

					<!-- price & qty -->
					<div class="card shadow mb-3">
					  <div class="card-body">
				  			<div class="form-group">
				  				<label for="price">Price</label>
				  				<input type="number" name="price" id="price" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="quantity">Quantity</label>
				  				<input type="number" name="quantity" id="quantity" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="category">Category</label>
				  				<select name="category" id="category" class="form-control">
				  					@foreach($categories as $category)
				  						<option value="{{ $category->id }}">{{ $category->name }}</option>
				  					@endforeach
				  				</select>
				  			</div>
					  </div>
					</div>
					<!-- image -->
					<div class="card shadow mb-3">
					  <div class="card-body">
			 			<div class="form-group">
			  				<label for="title">Images</label>
			  			</div>
			  			<div class="form-group mb-5">
							<div class="custom-file">
								<input type="file" name="image" id="image" class="custom-file-input">
								<label for="image" class="custom-file-label pb-3"></label>
							</div>
						</div>
					  </div>
					</div>
					
					<div class="offset-md-9 col-md-3 mb-4 d-flex flex-row">
						<a href="/admin/catalog_admin" class="btn btn-outline-secondary btn-block mx-2">Cancel</a>
						<button type="submit" class="btn btn-outline-secondary btn-block m-0">Save</button>
					</div>
					

				</form>
				
			</div>
	</div>
</div>
			 


@endsection