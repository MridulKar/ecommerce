@extends('layout')
@section('content')


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->


			<div class="register-req">
				<p>Please Fill uo the form</p>
			</div><!--/register-req-->

			
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="/save_checkout" method="post">
								{{ csrf_field() }}
									<input type="text" name="email" placeholder="Email" required="">
									
									<input type="text" name="name" placeholder="Name" required="">
						
									<input type="text" name="address" placeholder="Address" required="">

									<input type="text" name="phone" placeholder="phone" required="">
									<input type="text" name="city" placeholder="city" required="">
									<input type="submit" class="btn btn-default add-to-cart" value="submit">
									
								</form>
							
							</div>
						</div>
					</div>
			
			
			
					
			
	</section> <!--/#cart_items-->


	

@endsection  