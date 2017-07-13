@extends('layouts.website')
@section('content')
<div class="wrapper">
    <div class="content slideInUp">
        <p class="title" style="text-align:center; font-size:28px; color:#118175;">{{$scheme->name}}</p>
        <div class="content-inner">
          <div class="jumbotron">
            {!!$scheme->description!!}
            </div>
          <div>
          <table class="table">
            <tr>
                <th width="5%">No</th>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <?php $no =1; ?>
            @forelse($pt as $val)
                <tr>
                    <td>{{$no++}}</td>
                    <td><a href="{{ URL::to('pt-detail/'.$val->id)}}">{{$val->code}}</a></td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->description}}</td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $pt->render()) !!}</div>
        </div>
    </div>
</div>

                      
@endsection