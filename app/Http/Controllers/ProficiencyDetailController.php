<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ProficiencyDetail;
use App\Models\Proficiency;
use App\Models\Matrix;
use App\Models\Analyte;

class ProficiencyDetailController extends Controller
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
        $proficiency_detail = ProficiencyDetail::where('proficiency_id', 1)->paginate(20);
        $proficiency = Proficiency::find($id);
        $month = $this->month();
        return view('proficiency_detail.index', compact('proficiency_detail', 'proficiency', 'month'));
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
        $proficiency = Proficiency::find($id);
        return view('proficiency_detail.form', compact('analyte', 'matrix', 'month', 'proficiency'));
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
            return redirect('/scheme/proficiency/detail/'.$request->proficiency_id)->with('danger','Data failed to save.');
        endif;

        $proficiency_detail = new ProficiencyDetail;
        $proficiency_detail->scheme_id = $request->scheme_id;
        $proficiency_detail->start_month = $request->start_month;
        $proficiency_detail->matrix_id = $request->matrix_id;
        $proficiency_detail->range_from = $request->range_from;
        $proficiency_detail->range_to = $request->range_to;
        $proficiency_detail->number_of_pt = $request->number_of_pt;
        $proficiency_detail->range_to = $request->range_to;
        $proficiency_detail->approx = $request->approx;
        $proficiency_detail->quantity = $request->quantity;
        $proficiency_detail->price = str_replace(',', '', $request->price);
        $proficiency_detail->remarks = $request->remarks;
        $proficiency_detail->proficiency_id = $request->proficiency_id;
        $proficiency_detail->save();
        $no = 0;
        foreach ($request->analyte_id as  $value) {
            \DB::table('analyte_proficiency_detail')->insert(['proficiency_detail_id' => $proficiency_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
            $no++;
        }
        return redirect('/scheme/proficiency/detail/'.$request->proficiency_id)->with('success','Data Seved.');
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
        $proficiency_detail = ProficiencyDetail::find($id);
        $analyte = $this->analyte();
        $matrix = $this->matrix();
        $month = $this->month();
        $proficiency = Proficiency::find($proficiency_detail->proficiency_id);
        return view('proficiency_detail.form', compact('analyte', 'matrix', 'month', 'proficiency', 'proficiency_detail'));
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
        
        $proficiency_detail = ProficiencyDetail::find($id);
        
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/proficiency/detail/'.$proficiency_detail->proficiency_id)->with('danger','Data failed to save.');
        endif;

        $proficiency_detail->scheme_id = $request->scheme_id;
        $proficiency_detail->start_month = $request->start_month;
        $proficiency_detail->matrix_id = $request->matrix_id;
        $proficiency_detail->range_from = $request->range_from;
        $proficiency_detail->range_to = $request->range_to;
        $proficiency_detail->number_of_pt = $request->number_of_pt;
        $proficiency_detail->range_to = $request->range_to;
        $proficiency_detail->approx = $request->approx;
        $proficiency_detail->quantity = $request->quantity;
        $proficiency_detail->price = str_replace(',', '', $request->price);
        $proficiency_detail->remarks = $request->remarks;
        $proficiency_detail->save();
        \DB::table('analyte_proficiency_detail')->where('proficiency_detail_id',  $proficiency_detail->id)->delete();
        $no = 0;
        if($request->analyte_id){
            foreach ($request->analyte_id as  $value) {
                \DB::table('analyte_proficiency_detail')->insert(['proficiency_detail_id' => $proficiency_detail->id, 'analyte_id' => $request->analyte_id[$no]]);
                $no++;
            }
        }
        return redirect('/scheme/proficiency/detail/'.$proficiency_detail->proficiency_id)->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proficiency_detail = ProficiencyDetail::find($id);
        \DB::table('analyte_proficiency_detail')->where('proficiency_detail_id',  $proficiency_detail->id)->delete();
        $proficiency_id = $proficiency_detail->proficiency_id;
        $proficiency_detail->delete();
        return redirect('/scheme/proficiency/detail/'.$proficiency_id)->with('success','Data Deleted.');
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
