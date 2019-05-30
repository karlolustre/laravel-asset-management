@extends('layouts.confirmation_layout')

@section('title', 'Order Confirmation')

@section('content')



<div class="container-fluid">
	<div class="row">
		<div class="offset-md-2 col-md-6">
			<h3>Order Confirmation</h3>
			<small>Order # {{$order->id}}</small>
		</div>
		<div class="col-md-2 ml-5">
			<h3>&#8369; {{number_format($order->total,2,".",',')}}</h3>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-8  mt-3 mx-auto">
			<div class="card shadow bg-light">
				<div class="row">
				  <div class="col-md-10">
				    <div class="card bg-light border-0">
				      <div class="card-body">
				        <h3 class="card-title pb-1">Thank you for booking with us!</h3>
				        <p class="card-text">Your payment has been received. Please proceed to your order page.</p>
				        <a href="/orders" class="btn btn-success"> Proceed </a>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-md-10">
				    <div class="card bg-light border-0">
				      <div class="card-body">
				        <h5 class="card-title border-bottom pb-1">Information</h5>
				        <p class="card-text">Name: {{$order->user->name}}</p>
				        <p class="card-text">Date Created: {{$order->created_at}}</p>
				        <p class="card-text">Status: {{$order->status->name}}</p>
				      </div>
				    </div>
				  </div>
				</div>


			</div>
		</div>
	</div>
</div>

@endsection