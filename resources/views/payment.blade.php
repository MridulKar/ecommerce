@extends('layout')
@section('content')


<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php	$data=Cart::getContent();

						 foreach ($data as $item) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($item->image)}}" style="height:150px; width:150px;"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$item->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$item->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
										
									<p>{{$item->quantity}}
									
								
								</div>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">{{$item->price*$item->quantity}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="/deletecart/{{$item->id}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						 <?php }?>

						</tbody>
				</table>

			</div>
		</div>
	</section> <!--/#cart_items-->

<h1><li>Total <span>{{Cart::getTotal()}}</span></li></h1>
	
<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment</h3>		
					</div>
<form action="/payment_done" method="post">
  <input type="radio" id="hand_cash" name="payment_method" value="hand_cash">
  <label for="hand_cash">hand_cash</label><br>
 
  <input type="radio" id="bkash" name="payment_method" value="bkash">
  <label for="bkash">bkash</label><br><br>
  <input type="submit" value="Submit" class="btn btn-default add-to-cart">
</form>
 				
	</div>
</section><!--/#do_action-->

@endsection