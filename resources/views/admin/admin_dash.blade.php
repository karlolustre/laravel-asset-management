@extends('layouts.admin_layout')
@section('title', 'Admin | Dashboard')
@section('navtitle', 'Admin Dashboard')

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
				<div class="row">
					<div class="col-md-10 d-flex flex-row">
						<input type="text" placeholder="Search" class="form-control">
					</div>
					
				</div>
				

				
			</div>
	</div>
</div>
			 


@endsection