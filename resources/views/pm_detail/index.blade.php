@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h2>{{$pm->scheme->name}} {{$pm->name}}</h2></div>
    <div class="panel-body">
        <a href="#" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal" onClick="dataModal('{{ URL::to('scheme/pm/detail/create/'.$pm->id)}}')">Add</a>
        <br><br>
        <table class="table">
            <tr>
                <th width="5%">No</th>
                <th>Code</th>
                <th>Reference</th>
                <th>Purity</th>
                <th>Validity Period</th>
                <th>Price (RM)</th>
                <th width="10%">Action</th>
            </tr>
            <?php $no =1; ?>
            @forelse($pm_detail as $val)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$val->code}}</td>
                    <td>
                        {{$val->reference}}<br>
                        <img src='{{ asset($val->path) }}' width="100px" class="img-thumbnail">
                    </td>
                    <td>{{$val->purity}}</td>
                    <td>{{date("M Y", strtotime($val->validity_period))}}</td>
                    <td>{{number_format($val->price, 2)}}</td>
                    <td>
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-xs "  onClick="dataModal('{{ URL::to('scheme/pm/detail/edit')}}/{{$val->id}}')" >Edit</a>
                        @if(count($val->pmDetail) == 0)
                            <a href="{{ URL::to('scheme/pm/detail/destroy/'.$val->id)}}" class="btn btn-danger btn-xs pull-right" onclick= "return confirm('Are you sure ?')">Delete</a>
                        @endif
                    </td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $pm_detail->render()) !!}</div>
    </div>
</div>

@endsection
