<link href="{{ URL::to('/css/ui.css')}}" rel="stylesheet">
<link href="{{ URL::to('/css/select2.css')}}" rel="stylesheet">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2 class="modal-title" id="myModalLabel">Form {{$pm->scheme->name}} {{$pm->name}}</h2>
</div>
<div class="modal-body">
	@if(isset($pm_detail))
		{!! Form::model($pm_detail, array('url'=> URL::to('scheme/pm/detail/update/'.$pm_detail->id), 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@else
		{!! Form::open(array('url' => 'scheme/pm/detail/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
        <input type="hidden" name="pm_id" value="{{$pm->id}}">
	@endif
	<div class="row">
		<div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Code <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('code', null, array('class'=>'form-control', 'required'=>'', 'id' => 'code', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Reference <font color='red'>*</font></label>
            <div class="col-md-8">
                {!! Form::text('reference', null, array('class'=>'form-control', 'required'=>'', 'id' => 'reference', 'autocomplete' => 'off', "oninvalid" => "this.setCustomValidity('Required.')", "oninput" => "setCustomValidity('')")) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Purity </label>
            <div class="col-md-8">
                {!! Form::text('purity', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Validity Period </label>
            <div class="col-md-8">
                {!! Form::text('validity_period', null, array('class'=>'form-control date')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Packaging Size </label>
            <div class="col-md-8">
                {!! Form::text('packaging_size', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label"> Availability </label>
            <div class="col-md-8">
                {!! Form::text('availability', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Amount Required </label>
            <div class="col-md-8">
                {!! Form::text('amount_required', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Max Quantity Dispath </label>
            <div class="col-md-8">
                {!! Form::text('max_quantity_dispath', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Price </label>
            <div class="col-md-8">
                {!! Form::text('price', null, array('class'=>'form-control amount')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Coa </label>
            <div class="col-md-8">
                {!! Form::text('coa', null, array('class'=>'form-control')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">remarks</label>
            <div class="col-md-8">
                {!! Form::textarea('remarks', null, array('class'=>'form-control ')) !!}
            </div>
        </div>
        <div class="form-group  col-md-12 ">
            <label class="col-md-4 control-label">Image </label>
            <div class="col-md-8">
                @if(isset($pm_detail))
                    @if($pm_detail->path)
                        <img src='{{ asset($pm_detail->path) }}' class="col-md-12 img-thumbnail">
                        {!! Form::file('image', null, array('class'=>'form-control')) !!}
                    @endif
                @else
                    {!! Form::file('image', null, array('class'=>'form-control')) !!}
                @endif
            </div>
        </div>
        <div class="form-group col-md-12 ">
    		<label class="col-md-4 control-label"></label>
            <div class="col-md-8">
                <button type="submit" name="save" class="btn btn-primary pull-right btn-sm" value="save">{{isset($pm_detail) ? "Update" : "Save"}}</button>
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

	
