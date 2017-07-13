<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PtDetail;
use App\Models\Pt;
use App\Models\Matrix;
use App\Models\Analyte;

class PtDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pt_detail = PtDetail::where('pt_id', $id)->paginate(20);
        $pt = Pt::find($id);
        $month = $this->month();
        return view('pt_detail.index', compact('pt_detail', 'pt', 'month'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $analyte = $this->analyte();
        $matrix = $this->matrix();
        $month = $this->month();
        $pt = Pt::find($id);
        return view('pt_detail.form', compact('analyte', 'matrix', 'month', 'pt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/pt/detail/'.$request->pt_id)->with('danger','Data failed to save.');
        endif;

        $pt_detail = new PtDetail;
        $pt_detail->scheme_id = $request->scheme_id;
        $pt_detail->start_month = $request->start_month;
        $pt_detail->matrix_id = $request->matrix_id;
        $pt_detail->range_from = $request->range_from;
        $pt_detail->range_to = $request->range_to;
        $pt_detail->number_of_pt = $request->number_of_pt;
        $pt_detail->range_to = $request->range_to;
        $pt_detail->approx = $request->approx;
        $pt_detail->quantity = $request->quantity;
        $pt_detail->price = str_replace(',', '', $request->price);
        $pt_detail->remarks = $request->remarks;
        $pt_detail->pt_id = $request->pt_id;
        $pt_detail->save();
        if($request->analyte_id){
            $no = 0;
            foreach ($request->analyte_id as  $value) {
                \DB::table('analyte_pt_detail')->insert(['pt_detail_id' => $pt_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
                $no++;
            }
        }
        return redirect('/scheme/pt/detail/'.$request->pt_id)->with('success','Data Seved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pt_detail = PtDetail::find($id);
        $analyte = $this->analyte();
        $matrix = $this->matrix();
        $month = $this->month();
        $pt = Pt::find($pt_detail->pt_id);
        return view('pt_detail.form', compact('analyte', 'matrix', 'month', 'pt', 'pt_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $pt_detail = PtDetail::find($id);
        
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/pt/detail/'.$pt_detail->pt_id)->with('danger','Data failed to save.');
        endif;

        $pt_detail->scheme_id = $request->scheme_id;
        $pt_detail->start_month = $request->start_month;
        $pt_detail->matrix_id = $request->matrix_id;
        $pt_detail->range_from = $request->range_from;
        $pt_detail->range_to = $request->range_to;
        $pt_detail->number_of_pt = $request->number_of_pt;
        $pt_detail->range_to = $request->range_to;
        $pt_detail->approx = $request->approx;
        $pt_detail->quantity = $request->quantity;
        $pt_detail->price = str_replace(',', '', $request->price);
        $pt_detail->remarks = $request->remarks;
        $pt_detail->save();
        \DB::table('analyte_pt_detail')->where('pt_detail_id',  $pt_detail->id)->delete();
        if($request->analyte_id){
            $no = 0;
            foreach ($request->analyte_id as  $value) {
                \DB::table('analyte_pt_detail')->insert(['pt_detail_id' => $pt_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
                $no++;
            }
        }
        return redirect('/scheme/pt/detail/'.$pt_detail->pt_id)->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pt_detail = PtDetail::find($id);
        \DB::table('analyte_pt_detail')->where('pt_detail_id',  $pt_detail->id)->delete();
        $pt_id = $pt_detail->pt_id;
        $pt_detail->delete();
        return redirect('/scheme/pt/detail/'.$pt_id)->with('success','Data Deleted.');
    }

    public function validation($data)
    {
        return Validator::make($data->all(), [
            'scheme_id' => 'required'
        ]);
    }

    public function matrix()
    {
        $list = array('' => 'Please choose');
        foreach (Matrix::get() as  $val) {
            $list = $list + array($val->id => $val->code);
        }
        return $list;
    }

    public function analyte()
    {
        $list = array();
        foreach (Analyte::get() as  $val) {
            $list = $list + array($val->id => $val->code);
        }
        return $list;
    }

    public function month()
    {
        return array('' => 'Please choose', 1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');
    }
}
