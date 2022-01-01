@extends('Admin_layout')
@section('Admin_content')

<div id="content" class="span10">
		
			<div class="row-fluid sortable">
				<div class="box span12">	
					<div class="box-content">
						<form class="form-horizontal"  action="updatebrand/{{$data->brand_id}}" method="post">							
					  <fieldset>
						  	{{csrf_field()}}
						<div class="control-group">
							  <label class="control-label" >Brand name</label>
							  <div class="controls">
								<input type="text" class="" name="brand_name" value="{{$data->brand_name}}">
							  </div>
							</div>
							<div class="control-group">
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="brand_description" rows="3" >{{$data->brand_description}}</textarea>
							  </div>
							</div>	
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">update</button>
                        	</div>
						  </fieldset>					 
						</form> 
					</div>


@endsection