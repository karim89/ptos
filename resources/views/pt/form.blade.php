<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2 class="modal-title" id="myModalLabel">Form Proficiency Testing</h2>
</div>
<div class="modal-body">
	@if(isset($pt))
		{!! Form::model($pt, array('url'=> URL::to('scheme/pt/update/'.$pt->id), 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@else
		{!! Form::open(array('url' => 'scheme/pt/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@endif
	<div class="row">
		<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Code <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('code', null, array('class'=>'form-control', 'required'=>'', 'id' => 'code', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Name <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('name', null, array('class'=>'form-control', 'required'=>'', 'id' => 'name', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Size</label>
            <div class="col-md-8">
                {!! Form::select('size_id',  $size, null, array('class'=>'form-control')) !!}
            </div>
        </div>
    	<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Description</label>
            <div class="col-md-8">
                {!! Form::textarea('description', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group col-md-12 ">
    		<label class="col-md-4 control-label"></label>
            <div class="col-md-8">
                <button type="submit" name="save" class="btn btn-primary pull-right btn-sm" value="save">{{isset($pt) ? "Update" : "Save"}}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

	
