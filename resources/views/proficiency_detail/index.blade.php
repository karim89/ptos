@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h2>{{$proficiency->scheme->name}} {{$proficiency->name}}</h2></div>
    <div class="panel-body">
        <a href="#" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal" onClick="dataModal('{{ URL::to('scheme/proficiency/detail/create')}}')">Add</a>
        <br><br>
        <table class="table">
            <tr>
                <th width="5%">No</th>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
                <th width="10%">Action</th>
            </tr>
            <?php $no =1; ?>
            @forelse($proficiency_detail as $val)
                <tr>
                    <td>{{$no++}}</td>
                    <td><a href="{{ URL::to('scheme/proficiency/detail/'.$val->id)}}">{{$val->code}}</a></td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->description}}</td>
                    <td>
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-xs "  onClick="dataModal('{{ URL::to('scheme/proficiency/detail/edit')}}/{{$val->id}}')" >Edit</a>
                        @if(count($val->proficiencyDetail) == 0)
                            <a href="{{ URL::to('scheme/proficiency/detail/destroy/'.$val->id)}}" class="btn btn-danger btn-xs pull-right" onclick= "return confirm('Are you sure ?')">Delete</a>
                        @endif
                    </td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $proficiency_detail->render()) !!}</div>
    </div>
</div>

@endsection
