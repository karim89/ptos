<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h2 class="modal-title" id="myModalLabel">{{$scheme->name}}</h2>
</div>
<div class="modal-body">
	@if(isset($scheme))
		{!! Form::model($scheme, array('url'=> URL::to('scheme/update/'.$scheme->id), 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@else
		{!! Form::open(array('url' => 'scheme/store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
	@endif
	<div class="row">
		<div class=" col-md-12 ">
            
                {!! Form::textarea('description', null, array('class'=>'form-control', 'id' =>'ckeditor')) !!}
            
        </div>
        <div class=" col-md-12 ">
    		<button type="submit" name="save" class="btn btn-primary pull-right btn-sm" value="save">Save</button>
        </div>
    </div>
</div>
{!! Form::close() !!}
<script src="{{ URL::to('/js/app.js')}}"></script>
<script src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>
<script>
$(document).ready(function() {
    CKEDITOR.replace( 'ckeditor', {
        filebrowserBrowseUrl : '{{URL::to("elfinder")}}', // eg. 'includes/elFinder/elfinder.html'
    } );
});
</script>
	
