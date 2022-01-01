@extends('Admin_layout')
@section('Admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Order</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>order_Id</th>
								  <th>Customer_Name</th>
								  <th>Order Total</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($data as $item)  
						  <tbody>
							<tr>
								<td class="center">{{$item->order_id}}</td>
								<td class="center">{{$item->customer_name}}</td>
								<td class="center">{{$item->order_total}}</td>
								<td class="center">{{$item->order_status}}</td>
								

								<td class="center">
								
									<a class="btn btn-danger"  href="">
										<i class="halflings-icon white thumbs-up"></i>
								
									</a>
								

									<a class="btn btn-info" href="">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

							@endforeach
						
							
						
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->



@endsection