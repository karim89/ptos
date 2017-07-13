@extends('layouts.website')
@section('content')
<div class="wrapper">
    <div class="content slideInUp">
        <p class="title" style="text-align:center; font-size:28px; color:#118175;">{{$pt->scheme->name}} {{$pt->name}}</p>
        <div class="content-inner">
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
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs "  onClick="dataModal('{{ URL::to('pt-detail/add-cart')}}/{{$val->id}}')" >Add Cart</a>
                        
                    </td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $pt_detail->render()) !!}</div>
        </div>
    </div>
</div>

                      
@endsection