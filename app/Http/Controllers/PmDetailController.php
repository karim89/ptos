<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PmDetail;
use App\Models\Pm;
use App\Models\Matrix;
use App\Models\Analyte;

class PmDetailController extends Controller
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
        $pm_detail = PmDetail::where('pm_id', 1)->paginate(20);
        $pm = Pm::find($id);
        $month = $this->month();
        return view('pm_detail.index', compact('pm_detail', 'pm', 'month'));
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
        $pm = Pm::find($id);
        return view('pm_detail.form', compact('analyte', 'matrix', 'month', 'pm'));
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
            return redirect('/scheme/pm/detail/'.$request->pm_id)->with('danger','Data failed to save.');
        endif;

        $pm_detail = new PmDetail;
        $pm_detail->scheme_id = $request->scheme_id;
        $pm_detail->start_month = $request->start_month;
        $pm_detail->matrix_id = $request->matrix_id;
        $pm_detail->range_from = $request->range_from;
        $pm_detail->range_to = $request->range_to;
        $pm_detail->number_of_pm = $request->number_of_pm;
        $pm_detail->range_to = $request->range_to;
        $pm_detail->approx = $request->approx;
        $pm_detail->quantity = $request->quantity;
        $pm_detail->price = str_replace(',', '', $request->price);
        $pm_detail->remarks = $request->remarks;
        $pm_detail->pm_id = $request->pm_id;
        $pm_detail->save();
        if($request->analyte_id){
            $no = 0;
            foreach ($request->analyte_id as  $value) {
                \DB::table('analyte_pm_detail')->insert(['pm_detail_id' => $pm_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
                $no++;
            }
        }
        return redirect('/scheme/pm/detail/'.$request->pm_id)->with('success','Data Seved.');
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
        $pm_detail = PmDetail::find($id);
        $analyte = $this->analyte();
        $matrix = $this->matrix();
        $month = $this->month();
        $pm = Pm::find($pm_detail->pm_id);
        return view('pm_detail.form', compact('analyte', 'matrix', 'month', 'pm', 'pm_detail'));
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
        
        $pm_detail = PmDetail::find($id);
        
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/pm/detail/'.$pm_detail->pm_id)->with('danger','Data failed to save.');
        endif;

        $pm_detail->scheme_id = $request->scheme_id;
        $pm_detail->start_month = $request->start_month;
        $pm_detail->matrix_id = $request->matrix_id;
        $pm_detail->range_from = $request->range_from;
        $pm_detail->range_to = $request->range_to;
        $pm_detail->number_of_pm = $request->number_of_pm;
        $pm_detail->range_to = $request->range_to;
        $pm_detail->approx = $request->approx;
        $pm_detail->quantity = $request->quantity;
        $pm_detail->price = str_replace(',', '', $request->price);
        $pm_detail->remarks = $request->remarks;
        $pm_detail->save();
        \DB::table('analyte_pm_detail')->where('pm_detail_id',  $pm_detail->id)->delete();
        if($request->analyte_id){
            $no = 0;
            foreach ($request->analyte_id as  $value) {
                \DB::table('analyte_pm_detail')->insert(['pm_detail_id' => $pm_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
                $no++;
            }
        }
        return redirect('/scheme/pm/detail/'.$pm_detail->pm_id)->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pm_detail = PmDetail::find($id);
        \DB::table('analyte_pm_detail')->where('pm_detail_id',  $pm_detail->id)->delete();
        $pm_id = $pm_detail->pm_id;
        $pm_detail->delete();
        return redirect('/scheme/pm/detail/'.$pm_id)->with('success','Data Deleted.');
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
