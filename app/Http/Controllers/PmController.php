<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pm;
use App\Models\Scheme;
use App\Models\Size;

class PmController extends Controller
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
    public function index()
    {
        $pm = Pm::where('scheme_id', 2)->paginate(20);
        $scheme = Scheme::find(2);
        return view('pm.index', compact('pm', 'scheme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $size = $this->size();
        return view('pm.form', compact('size'));
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
            return redirect('/scheme/pm')->with('danger','Data failed to save.');
        endif;

        $pm = new Pm;
        $pm->code = $request->code;
        $pm->name = $request->name;
        $pm->size_id = $request->size_id;
        $pm->description = $request->description;
        $pm->scheme_id = 2;
        $pm->save();
        return redirect('/scheme/pm')->with('success','Data Seved.');
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
        $pm = Pm::find($id);
        $size = $this->size();
        return view('pm.form', compact('pm', 'size'));
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
            return redirect('/scheme/pm')->with('danger','Data failed to save.');
        endif;

        $pm = Pm::find($id);
        $pm->code = $request->code;
        $pm->name = $request->name;
        $pm->size_id = $request->size_id;
        $pm->description = $request->description;
        $pm->scheme_id = 2;
        $pm->save();
        return redirect('/scheme/pm')->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pm = Pm::find($id);
        $pm->delete();
        return redirect('/scheme/pm')->with('success','Data Deleted.');
    }

    public function validation($data)
    {
        return Validator::make($data->all(), [
            'code' => 'required',
            'name' => 'required'
        ]);
    }

    public function size()
    {
        $list = array('' => 'Please choose');
        foreach (Size::get() as  $val) {
            $list = $list + array($val->id => $val->code);
        }
        return $list;
    }
}
