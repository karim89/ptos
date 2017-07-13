@extends('layouts.website')
@section('content')
<div class="wrapper">
    <div class="content slideInUp">
        <p class="title" style="text-align:center; font-size:28px; color:#118175;">{{$pm->scheme->name}} {{$pm->name}}</p>
        <div class="content-inner">
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
                        <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs "  onClick="dataModal('{{ URL::to('pm-detail/add-basket')}}/{{$val->id}}')" >Add Basket</a>
                        
                    </td>
                </tr>    
            @empty
            @endforelse
        </table>
        <div class="pages">{!! str_replace('/?', '?', $pm_detail->render()) !!}</div>
        </div>
    </div>
</div>

                      
@endsection