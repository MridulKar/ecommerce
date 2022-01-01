@extends('Admin_layout')
@section('Admin_content')


<div id="content" class="span10">
			
			
		
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Brands</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal"  action="{{url('/insertbrand')}}" method="post">
						  <fieldset>
						  	{{csrf_field()}}
						<div class="control-group">
							  <label class="control-label" >Brand name</label>
							  <div class="controls">
								<input type="text" class="" name="brand_name" value="">
							  </div>
							</div>

							<div class="control-group">
						
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="brand_description" rows="3"></textarea>
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