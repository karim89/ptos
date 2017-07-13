<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pt;
use App\Models\Scheme;
use App\Models\Size;

class PtController extends Controller
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
        $pt = Pt::where('scheme_id', 1)->paginate(20);
        $scheme = Scheme::find(1);
        return view('pt.index', compact('pt', 'scheme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $size = $this->size();
        return view('pt.form', compact('size'));
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
            return redirect('/scheme/pt')->with('danger','Data failed to save.');
        endif;

        $pt = new Pt;
        $pt->code = $request->code;
        $pt->name = $request->name;
        $pt->size_id = $request->size_id;
        $pt->description = $request->description;
        $pt->scheme_id = 1;
        $pt->save();
        return redirect('/scheme/pt')->with('success','Data Seved.');
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
        $pt = Pt::find($id);
        $size = $this->size();
        return view('pt.form', compact('pt', 'size'));
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
            return redirect('/scheme/pt')->with('danger','Data failed to save.');
        endif;

        $pt = Pt::find($id);
        $pt->code = $request->code;
        $pt->name = $request->name;
        $pt->size_id = $request->size_id;
        $pt->description = $request->description;
        $pt->scheme_id = 1;
        $pt->save();
        return redirect('/scheme/pt')->with('success','Data Seved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pt = Pt::find($id);
        $pt->delete();
        return redirect('/scheme/pt')->with('success','Data Deleted.');
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
