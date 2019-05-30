@extends('layouts.admin_layout')
@section('title', 'Admin | Add Member')
@section('navtitle', 'Admin Add Member')

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
				  				<input type="text" name="name" id="name" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="email">Email:</label>
				  				<input type="text" name="email" id="email" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="address">Address:</label>
				  				<input type="text" name="address" id="address" class="form-control">
				  			</div>

				  			<div class="form-group">
				  				<label for="phone">Mobile:</label>
				  				<input type="number" name="phone" id="phone" class="form-control">
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
				
					
					<div class="offset-md-9 col-md-3 mb-4 d-flex flex-row">
						<a href="/admin/members" class="btn btn-outline-secondary btn-block mx-2">Cancel</a>
						<button type="submit" class="btn btn-outline-secondary btn-block m-0">Add</button>
					</div>
					

				</form>
				
			</div>
	</div>
</div>
			 


@endsection