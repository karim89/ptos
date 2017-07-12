<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ProficiencyDetail;
use App\Models\Proficiency;

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
        return view('proficiency_detail.index', compact('proficiency_detail', 'proficiency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proficiency.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/proficiency')->with('danger','Data failed to save.');
        endif;

        $proficiency = new Proficiency;
        $proficiency->code = $request->code;
        $proficiency->name = $request->name;
        $proficiency->description = $request->description;
        $proficiency->scheme_id = 1;
        $proficiency->save();
        return redirect('/scheme/proficiency')->with('success','Data Seved.');
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
        $proficiency = Proficiency::find($id);
        return view('proficiency.form', compact('proficiency'));
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
        $validator = $this->validation($request);
        if ($validator->fails()):
            return redirect('/scheme/proficiency')->with('danger','Data failed to save.');
        endif;

        $proficiency = Proficiency::find($id);
        $proficiency->code = $request->code;
        $proficiency->name = $request->name;
        $proficiency->description = $request->description;
        $proficiency->scheme_id = 1;
        $proficiency->save();
        return redirect('/scheme/proficiency')->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proficiency = Proficiency::find($id);
        $proficiency->delete();
        return redirect('/scheme/proficiency')->with('success','Data Deleted.');
    }

    public function validation($data)
    {
        return Validator::make($data->all(), [
            'code' => 'required',
            'name' => 'required'
        ]);
    }
}
