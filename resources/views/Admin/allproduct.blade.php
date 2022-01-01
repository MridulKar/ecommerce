@extends('Admin_layout')
@section('Admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Product</h2>
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
							  	<th>Product Id</th>
							  	  <th>Product Image</th>
								  <th>Product Name</th>
                                  <th>Product Price</th>\
                                 
								  <th>Catagory Name</th>
								  <th>Brand Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($data as $item)  
						  <tbody>
							<tr>
								<td class="center">{{$item->product_id}}</td>
								<td><img src="{{URL::to($item->product_image)}}" style="height:50px; width:45px;"></td>
								<td class="center">{{$item->product_name}}</td>
								<td class="center">{{$item->product_price}}</td>
							
								<td class="center">{{$item->catagory_name}}</td>
								<td class="center">{{$item->brand_name}}</td>
								
								<td class="center">
								@if($item->publication_status==1)
									<span class="label label-success">Active</span>
								@else
								<span class="label label-danger">deactive</span>
							@endif
								</td>

								<td class="center">
								@if($item->publication_status==1)
									<a class="btn btn-danger"  href="/unactiveproduct/{{$item->product_id}}">
										<i class="halflings-icon white thumbs-up"></i>
								
									</a>
									@else
									<a class="btn btn-success" href="/activeproduct/{{$item->product_id}}">
										<i class="halflings-icon white thumbs-up"></i>
								
									</a>
									@endif
									

						

									<a class="btn btn-danger" href="/deleteproduct/{{$item->product_id}}">
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