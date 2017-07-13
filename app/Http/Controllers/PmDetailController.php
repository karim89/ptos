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
        $pm_detail = PmDetail::where('pm_id', $id)->paginate(20);
        $pm = Pm::find($id);
        return view('pm_detail.index', compact('pm_detail', 'pm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pm = Pm::find($id);
        return view('pm_detail.form', compact('pm'));
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
        $pm_detail->code = $request->code;
        $pm_detail->reference = $request->reference;
        $pm_detail->purity = $request->purity;
        $pm_detail->validity_period = $request->validity_period;
        $pm_detail->packaging_size = $request->packaging_size;
        $pm_detail->availability = $request->availability;
        $pm_detail->amount_required = $request->amount_required;
        $pm_detail->max_quantity_dispath = $request->max_quantity_dispath;
        $pm_detail->coa = $request->coa;
        $pm_detail->price = str_replace(',', '', $request->price);
        $pm_detail->remarks = $request->remarks;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = public_path().'/images/pm/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(' ','_',$filename);
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $pm_detail->path = 'images/pm/'.$filename;
        }
        $pm_detail->user_id = \Auth::user()->id;
        $pm_detail->pm_id = $request->pm_id;
        $pm_detail->save();
        
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
        $pm = Pm::find($pm_detail->pm_id);
        return view('pm_detail.form', compact('pm', 'pm_detail'));
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

        $pm_detail->code = $request->code;
        $pm_detail->reference = $request->reference;
        $pm_detail->purity = $request->purity;
        $pm_detail->validity_period = $request->validity_period;
        $pm_detail->packaging_size = $request->packaging_size;
        $pm_detail->availability = $request->availability;
        $pm_detail->amount_required = $request->amount_required;
        $pm_detail->max_quantity_dispath = $request->max_quantity_dispath;
        $pm_detail->coa = $request->coa;
        $pm_detail->price = str_replace(',', '', $request->price);
        $pm_detail->remarks = $request->remarks;
        $pm_detail->user_id = \Auth::user()->id;
        if ($request->hasFile('image')) {
            if($pm_detail->path) {
                unlink($pm_detail->path);
            }
            $file = $request->file('image');
            $destinationPath = public_path().'/images/pm/';
            $filename        = time() . '_' . $file->getClientOriginalName();
            $filename = str_replace(' ','_',$filename);
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $pm_detail->path = 'images/pm/'.$filename;
        }
        $pm_detail->save();
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
        if($pm_detail->path) {
            unlink($pm_detail->path);
        }
        $pm_id = $pm_detail->pm_id;
        $pm_detail->delete();
        return redirect('/scheme/pm/detail/'.$pm_id)->with('success','Data Deleted.');
    }

    public function validation($data)
    {
        return Validator::make($data->all(), [
            'code' => 'required'
        ]);
    }

}
