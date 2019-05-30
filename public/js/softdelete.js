function deleteOrder(orderid) {
	var question = document.querySelector('#delete_order_question');
	question.innerHTML = "Do you want to delete order #" + orderid + "?";

	//set route
	document.getElementById('delete_order_form').setAttribute('action', '/delete_order/' + orderid);

	//show modal

	$('#delete_order_modal').modal('show');
	
}
