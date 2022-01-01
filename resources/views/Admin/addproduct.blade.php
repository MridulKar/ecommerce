@extends('Admin_layout')
@section('Admin_content')

<div id="content" class="span10">
			
			
		
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal"  action="{{url('/insertproduct')}}" method="post" enctype="multipart/form-data">
						  <fieldset>
						  	{{csrf_field()}}
						<div class="control-group">
							  <label class="control-label" >product name</label>
							  <div class="controls">
								<input type="text" class="" name="product_name" value="" required="">
							  </div>
							</div>

							 <div class="control-group">

								<label class="control-label" >product catagory</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="catagory_id">
								  		<option>select catagory</option>
								  	<?php
                                          
                                          $data=DB::table('catagories')
                                                ->where('publication_status',1)
                                                ->get();

                                              foreach ($data as $item) {?>
									<option value="{{$item->catagory_id}}">{{$item->catagory_name}}</option>
									<?php }?>
									
									
								  </select>
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" >product Brand</label>
								<div class="controls">
								  <select  data-rel="chosen" name="brand_id">
								  	<option>select Brand</option>
								  	<?php
                                          
                                          $data=DB::table('Brands')
                                                ->where('publication_status',1)
                                                ->get();

                                              foreach ($data as $item) {?>
									<option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
									<?php }?>
								  </select>
								</div>
							  </div>

						
							<div class="control-group">
							  <label class="control-label" >product Price</label>
							  <div class="controls">
								<input type="text" class="" name="product_price" value="" required="">
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label">Image</label>
								<div class="controls">
								  <input type="file" name="img">
								</div>
							  </div>

                            <div class="control-group">
							  <label class="control-label" >Product Status</label>
							  <div class="controls">
								<input type="checkbox"  name="publication_status" value="1">
							  </div>
							</div>
			
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>

@endsection