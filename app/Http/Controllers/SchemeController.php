<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Scheme;

class SchemeController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $scheme = Scheme::find($id);
        return view('scheme.form', compact('scheme'));
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
        $scheme = Scheme::find($id);
        $scheme->description = $request->description;
        $scheme->save();
        if($id == 1) {
            return redirect('/scheme/proficiency')->with('success','Data Seved.');
        }else{
            return redirect('/scheme/material')->with('success','Data Seved.');
        }
    }
}
