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
									
										
									<p>{{$item->quantity}}</p> 
									
								
								</div>
							</td>
						
							<td class="cart_total">
								<p class="cart_total_price">
									{{$item->price*$item->quantity}}</p>
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

				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::getSubTotal()}}</span></li>
							
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::getTotal()}}</span></li>
						</ul>
                        <?php $customer = session()->get('customer_id')  ?> 

							

                            @if($customer != NULL)
							<a class="btn btn-default check_out" href="/customer_checkout">Check Out</a>

							 @else 
							<a class="btn btn-default check_out" href="/checkout">Check Out</a>
							@endif
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->



@endsection  