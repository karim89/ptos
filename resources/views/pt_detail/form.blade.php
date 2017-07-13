<link href="{{ URL::to('/css/ui.css')}}" rel="stylesheet">
<link href="{{ URL::to('/css/select2.css')}}" rel="stylesheet">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2 class="modal-title" id="myModalLabel">Form {{$pt->scheme->name}} {{$pt->name}}</h2>
</div>
<div class="modal-body">
	@if(isset($pt_detail))
		{!! Form::model($pt_detail, array('url'=> URL::to('scheme/pt/detail/update/'.$pt_detail->id), 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@else
		{!! Form::open(array('url' => 'scheme/pt/detail/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
        <input type="hidden" name="pt_id" value="{{$pt->id}}">
	@endif
	<div class="row">
		<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Scheme Id <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('scheme_id', null, array('class'=>'form-control', 'required'=>'', 'id' => 'scheme_id', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Start Month <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::select('start_month',  $month, null, array('class'=>'form-control select2', 'required'=>'', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Matrix</label>
            <div class="col-md-8">
                {!! Form::select('matrix_id',  $matrix, null, array('class'=>'form-control select2')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Analyte</label>
            <div class="col-md-8">
                {!! Form::select('analyte_id[]',  $analyte, isset($pt_detail) ? $pt_detail->analyte->pluck('analyte_id') : null, array('class'=>'form-control select2', 'multiple'=>'multiple')) !!}
            </div>
        </div>
    	<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Range From</label>
            <div class="col-md-8">
                {!! Form::number('range_from', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Range To</label>
            <div class="col-md-8">
                {!! Form::number('range_to', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Number Of PT Item Perset</label>
            <div class="col-md-8">
                {!! Form::number('number_of_pt', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Approx </label>
            <div class="col-md-8">
                {!! Form::number('approx', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Quantity </label>
            <div class="col-md-8">
                {!! Form::number('quantity', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Price </label>
            <div class="col-md-8">
                {!! Form::text('price', null, array('class'=>'form-control amount')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">remarks</label>
            <div class="col-md-8">
                {!! Form::textarea('remarks', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group col-md-12 ">
    		<label class="col-md-4 control-label"></label>
            <div class="col-md-8">
                <button type="submit" name="save" class="btn btn-primary pull-right btn-sm" value="save">{{isset($pt_detail) ? "Update" : "Save"}}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<script src="{{ URL::to('/js/amount.js')}}"></script>
<script src="{{ URL::to('/js/ui.js')}}"></script>
<script src="{{ URL::to('/js/select2.js')}}"></script>
<script>
    $('.amount').autoNumeric('init');
    $('.select2').select2({width: '100%'}); 
    $(document).ready(function() {
        $(".number").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });
        $( ".date" ).datepicker({ 
            dateFormat: 'yy-mm-dd', 
            changeMonth: true,
            changeYear: true 
        });
    });
</script>

	
