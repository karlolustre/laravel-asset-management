@extends('layouts.admin_layout')
@section('title', 'Admin | Catalog')
@section('navtitle', 'Admin Catalog')
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
				@if(Session::has('success_message'))
					<div class="alert alert-success p-0 text-center">
						{{ Session::get('success_message') }}
					</div>

				@endif
				<div class="row mb-3">
					<div class="col-md-9 d-flex flex-row">
						<input type="text" placeholder="Search" class="form-control">
					</div>
					<div class="col-md-3">
						<a href="/admin/catalog_admin/add_product" class="btn btn-outline-secondary btn-block">Add product</a>
					</div>
				</div>
				

				<table class="table table-hover shadow table-white">
				  <thead>
				    <tr>
				      <th scope="col">Product</th>
				      <th scope="col">Inventory</th>
				      <th scope="col">Description</th>
				      <th scope="col">Price</th>
				      <th scope="col">Category</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($items as $item)
				    <tr>
				      <td ><img src="/{{$item->image_url}}" class="mr-5 catalog-img"><a class="txt-grey" href="/admin/catalog_admin/{{ $item->id }}">{{$item->name}}</a></td>
				      <td class="pt-5">{{$item->quantity}}</td>
				      <td class="pt-5">{{$item->description}}</td>
				      <td class="pt-5">{{$item->price}}</td>
				      <td class="pt-5 text-center">{{$item->category->name}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
	</div>
</div>
			 


@endsection