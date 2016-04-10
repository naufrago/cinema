@if(Session::has('message-error'))
		<h2><b><div class="alert alert-danger alert-dismissible" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	<!--entrega el mensaje-->
	  {{Session::get('message-error')}}

	</div></b></h2>
	@endif