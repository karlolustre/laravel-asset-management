@extends('layouts.admin_layout')
@section('title', 'Admin | Member Details')
@section('navtitle', 'Admin Member Details')


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

				

				

			<form action="/admin/members/add_members" method="post" enctype="multipart/form-data">
				@csrf
				
					
				
					<!-- title & description -->
					<div class="card shadow mb-3">
					  <div class="card-body">
					  		<p class="border-bottom">Information</p>
				  			<div class="form-group">
				  				<label for="name">Name:</label>
				  				<input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="email">Email:</label>
				  				<input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="address">Address:</label>
				  				<input type="text" name="address" id="address" class="form-control" value="{{$user->address}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="phone">Mobile:</label>
				  				<input type="number" name="phone" id="phone" class="form-control" value="{{$user->phone}}">
				  			</div>

				  			<div class="form-group">
				  				<label for="gender">Gender</label>
				  				<select name="gender" id="gender" class="form-control">
				  						<option value="male">Male</option>
				  						<option value="female">Female</option>
				  				</select>
				  			</div>

					  </div>
					</div>

					<!-- price & qty -->
					<div class="card shadow mb-3">
					  <div class="card-body">
					  		<p class="border-bottom">Security</p>
				  			<div class="form-group">
				  				<label for="password">Password</label>
				  				<input type="password" name="password" id="password" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="pass1">Confirm Password</label>
				  				<input type="password" name="pass1" id="pass1" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="admin">User Role</label>
				  				<select name="admin" id="admin" class="form-control">
				  						<option value="1">admin</option>
				  						<option value="0">user</option>
				  				</select>
				  			</div>
					  </div>
					</div>
				
					
					<div class="row mb-2">
						<div class="col-md-10">
							<a href="/admin/members" class="btn btn-outline-secondary"> Back</a>
						</div>
						<div class="col-md-2 d-flex flex-row">
						<button type="submit" class="btn btn-outline-secondary btn-block">Save</button>
						
						</div>
					</div>
					

				</form>
				
				<div class="row mb-2">
					<div class=" offset-md-10 col-md-2">
					
						<button type="submit" class="btn btn-outline-danger btn-block deleteButton" data-toggle="modal" name="{{$user->name}}" data-id="{{$user->id}}" data-target="#delete_modal">Delete</button>
						
					</div>
				</div>
			</div>
	</div>
</div>
			 

	<div class="modal" tabindex="1" role="dialog" id="delete_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Delete Item</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div id="delete_question" class="modal-body">
				</div>
				<div class="modal-footer">
					<div class="d-flex flex-row">
						<form method="post" id="deleteForm">
							@csrf
							{{method_field('DELETE')}}
							<button class="btn btn-danger">Delete Item</button>
						</form>
						<button class="btn btn-secondary ml-2" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection