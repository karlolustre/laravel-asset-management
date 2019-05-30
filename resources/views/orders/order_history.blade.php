@extends('layouts.app')
@section('title', 'Order History')

@section('content')
	<div class="container">
		@if(Session::has("delete_message"))
			<div class="alert alert-{{ Session::get('status') }} status-box">
				<span>{{ ucfirst(Session::get("delete_message")) }}</span>
				<a href="{{Session::get('undo_url')}}" class="btn btn-link font-weight-bold">UNDO</a>
			</div>
		@endif
				
		<div class="row">
			<div class="col-md-10 mx-auto">
				<table class="table table-hover table-white shadow">
					<thead>
						<tr>
							<th scope="col">Order #</th>
							<th scope="col">Name</th>
							<th scope="col">Date Purchased</th>
							<th scope="col">Total</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td>
							<td>{{ ucwords($order->user->name) }}</td>
							<td>{{ $order->created_at }}</td>
							<td>{{ $order->total }}</td>
							<td>{{ $order->status->name }}</td>
						

						<td>
							<a class="btn btn-outline-danger" href="#" onclick="deleteOrder({{$order->id}})">
								Delete
							</a>
						</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

<div class="modal fade" tabindex="1" role="dialog" id="delete_order_modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header p-5">
				<h5 class="modal-title">Delete Order</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body p-5">
				<span id="delete_order_question"></span>
			</div>
			<div class="modal-footer p-5">
				<div class="d-flex flex-row">
					<form method="post" id="delete_order_form">
						@csrf
						{{method_field('DELETE')}}
						<button type="submit" class="btn btn-outline-danger">Confirm</button>
						<button type="button" class="btn btn-outline-secondary">Close</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function deleteOrder(orderid) {
	var question = document.querySelector('#delete_order_question');
	question.innerHTML = "Do you want to delete order #" + orderid + "?";

	//set route
	document.getElementById('delete_order_form').setAttribute('action', '/delete_order/' + orderid);

	//show modal

	$('#delete_order_modal').modal('show');
	
}
</script>