@extends('layouts.admin_layout')
@section('title', 'Admin | Rentals')
@section('navtitle', 'Admin Rental')

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
				<div class="row mb-3">
					<div class="col-md-8 d-flex flex-row">
						<input type="text" placeholder="Search" class="form-control">
					</div>
					<div class="col-md-4 d-flex flex-row">
						<button href="#" onClick="window.print()" class="btn-outline-secondary btn btn-block m-0">Print</button>
					</div>

					
				</div>

				<table class="table table-hover shadow table-white text-center">
				  <thead>
				    <tr>
				      <th scope="col">Order #</th>
				      <th scope="col">Date</th>
				      <th scope="col">Name</th>
				      <th scope="col">status</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($rentals as $rental)
				    <tr>
				      <td>{{$rental->id}}</td>
				      <td>{{$rental->created_at}}</td>
				      <td>{{$rental->user->name}}</td>
				      <td>{{$rental->status->name}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>

				

				
			</div>
	</div>
</div>
			 


@endsection