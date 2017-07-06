<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2 class="modal-title" id="myModalLabel">Form Role</h2>
</div>
<div class="modal-body">
	@if(isset($role))
		{!! Form::model($role, array('url'=> URL::to('role/update/'.$role->id), 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@else
		{!! Form::open(array('url' => 'role/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@endif
	<div class="row">
		<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Name <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('name', null, array('class'=>'form-control', 'required'=>'', 'id' => 'name', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Display Name <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('display_name', null, array('class'=>'form-control', 'required'=>'', 'id' => 'display_name', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
    	<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Description</label>
            <div class="col-md-8">
                {!! Form::textarea('description', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Permission</label>
            <div class="col-md-8">
                {!! Form::select('permission_id[]',  $permission, isset($role) ? $role->permission->pluck('permission_id') : null, array('class'=>'form-control', 'multiple'=>'multiple')) !!}
            </div>
        </div>
        <div class="form-group col-md-12 ">
    		<label class="col-md-4 control-label"></label>
            <div class="col-md-8">
                <button type="submit" name="save" class="btn btn-primary pull-right btn-sm" value="save">{{isset($permissin) ? "Update" : "Save"}}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

	
