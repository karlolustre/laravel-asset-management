@extends('layouts.app')

@section('content')
@if(Session::has('cart'))


<div class="container-fluid bottom-margin">
	@if(Session::has('success_message'))
      <div class="alert alert-success">
        {{ Session::get('success_message') }}
      </div>
    @endif
<h1 class="display-4 text-center mb-4">My Cart</h1>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<table class="table table-hover table-width">
			<thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Quantity</th>
					<th class="text-center" scope="col">Price</th>
					<th class="text-center" scope="col">Action</th>
					<th class="text-center" scope="col">Subtotal</th>
				</tr>
			</thead>

			<tbody>
				@foreach($item_cart as $item)
				<tr class="cart-table">
					<th scope="row" class="table-td"><img src="/{{$item->image_url}}" alt="" class="td-img mx-2">{{ ucfirst($item->name) }}</th>
					<td class="pt-5 table-td-short">
						<form method="post" id="update_quantity{{$item->id}}">
							@csrf
							{{ method_field('PATCH')}}
							<!-- patch to target specific attribute -->
							<!-- put to replace all attributes -->

							<div class="input-group mb-3">
                    			<div class="input-group-prepend">
                      				<button type="button" class="btn btn-dark" onclick="minus({{ $item->id }})">&#8722;</button>
                    			</div>

                    			{{-- <input type="text" value="{{$item->id}}"> --}}
                   				
                   				<input type="number" min="1" max="{{$item->quantity}}" value="{{ $item->quantity }}" name="quantity" class="text-center  cart-qty" id="quantity{{$item->id}}">
                   				 
                   				 <div class="input-group-append"> 
                     				 <button type="button" class="btn btn-dark"" onclick="plus({{ $item->id}})">+</button>
                    			</div>
                  			</div>
						</form>
					</td>
					<td class="pt-5">&#8369; {{$item->price}}</td>
					<td class="pt-5">
						<!-- <form action="/mycart/{{$item->id}}/delete" method="POST">
							@csrf
							{{ method_field('DELETE')}}

							<button type="submit" class="btn btn-outline-danger"> Delete </button>
						</form> -->
						<button class="btn btn-outline-danger" onclick="openDeleteModal({{ $item->id }}, '{{$item->name}}')" data-toggle="modal" data-target="#delete_modal">Remove</button>
					</td>
					<td class="pt-5">&#8369; {{$item->subtotal}}</td>
					
				</tr>
				@endforeach

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td scope="row">Total</td>
					<td>&#8369; {{number_format($total,2,".",',')}}</td>
				</tr>
			</tbody>
			</table>
		</div> <!-- end col -->
	</div> <!-- end row -->

	<div class="row mb-5">
		<div class="offset-md-1 col-md-4 ">
			<div class="d-flex flex-row">
				<a href="/menu/catalog" class="btn btn-secondary"> < Back to shopping</a>
				
				<button class='btn btn-secondary border-primary ml-2' data-toggle="modal" data-target="#delete_cart"> Clear Cart </button>

			</div>
		</div>
		<div class="offset-md-4 col-md-2">
         	<a onclick="pay()" class="btn bg-success btn-block ml-auto">Book now</a>
		</div>
	</div>

</div> <!-- end container -->
@else
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<h4 class="text-center display-4">Your cart is empty.</h4>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-2 mx-auto m-5">
				<a href="/menu/catalog" class="btn btn-outline-secondary btn-block"> Book Now! </a>
			</div>
		</div>
		<div class="row">
		</div>
	</div>
@endif

<!-- delete item modal -->
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

<!-- clear cart modal -->

<div class="modal" tabindex="1" role="dialog" id="delete_cart">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Clear Cart</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Do you want to delete all the items in your cart?</p>
			</div>
			<div class="modal-footer">
				<form method="post" action="/cart/clearcart">
					@csrf
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Delete Cart Items</button>
				</form>
			</div>
		</div>
	</div>
</div>

@if(Session::has('cart'))
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_rWDY8edh1HwiHpUob84DPmgW00gIhpA9vM');

    function pay() {
      stripe.redirectToCheckout({
          sessionId: '{{$CHECKOUT_SESSION_ID}}'
      }).then((result) => {
        $('#error_modal').modal('show');
      });
    }
  </script>
  @endif

<!-- FIX THIS -->
<script>
	function openDeleteModal(id, name) {
		$('#deleteForm').attr('action', '/mycart/' + id + '/delete');
		$('#delete_question').html("Do you want to delete " + name + "?");
	}

	function minus(id) {
		$value = $("#quantity" +id).val();
		$value = parseInt($value);

		if($value > 1) {
			$("#quantity" +id).val($value - 1);
		}

		$('#update_quantity' +id).attr('action', '/mycart/' + id + '/changeQty');

		$('#update_quantity' +id).submit();
	}

	function plus(id) {
		$value = $("#quantity" +id).val();
		$value = parseInt($value);

		// if($value < max){
		$("#quantity" +id).val($value + 1);

		// }


		$('#update_quantity' +id).attr('action', '/mycart/' + id + '/changeQty');

		$('#update_quantity' +id).submit();
	}
	
</script>

@endsection