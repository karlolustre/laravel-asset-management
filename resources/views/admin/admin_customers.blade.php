@extends('layouts.admin_layout')
@section('title', 'Admin | Members')
@section('navtitle', 'Admin Members')

@section('admin_content')

<div class="container-fluid">
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
				<div class="row">
					<div class="col-md-9 d-flex flex-row mb-3">
						<input type="text" placeholder="Search" class="form-control">
					</div>
					<div class="col-md-3">
						<a href="/admin/members/add_members" class="btn btn-outline-secondary btn-block">Add Member</a>
					</div>
				</div>

					<table class="table table-hover text-center shadow table-white">
					  <thead>
					    <tr>
					      <th scope="col">Customer #</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Created at</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($users as $user)
					    <tr>
					      <td>{{$user->id}}</td>
					      <td><a class="txt-grey" href="/admin/members/{{ $user->id }}">{{$user->name}}</a></td>
					      <td>{{$user->email}}</td>
					      <td>{{$user->created_at}}</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
		</div>
	</div>
</div>
				
				

@endsection 