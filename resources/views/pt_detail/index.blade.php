@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h2>{{$pt->scheme->name}} {{$pt->name}}</h2></div>
    <div class="panel-body">
        <a href="#" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal" onClick="dataModal('{{ URL::to('scheme/pt/detail/create/'.$pt->id)}}')">Add</a>
        <br><br>
        <table class="table">
            <tr>
                <th width="5%">No</th>
                <th>Scheme Id</th>
                <th>Start Month</th>
                <th>Matrix</th>
                <th>Analyte</th>
                <th width="10%">Action</th>
            </tr>
            <?php $no =1; ?>
            @forelse($pt_detail as $val)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$val->scheme_id}}</td>
                    <td>{{$month[$val->start_month]}}</td>
                    <td>{{$val->matrix ? $val->matrix->name : ''}}</td>
                    <td>
                        @foreach($val->analyte as $list)
                            <span class="label label-default">{{$list->analyte['name']}}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-xs "  onClick="dataModal('{{ URL::to('scheme/pt/detail/edit')}}/{{$val->id}}')" >Edit</a>
                        @if(count($val->ptDetail) == 0)
                            <a href="{{ URL::to('scheme/pt/detail/destroy/'.$val->id)}}" class="btn btn-danger btn-xs pull-right" onclick= "return confirm('Are you sure ?')">Delete</a>
                        @endif
                    </td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $pt_detail->render()) !!}</div>
    </div>
</div>

@endsection
