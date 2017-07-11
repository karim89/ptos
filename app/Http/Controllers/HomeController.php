<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archive;
use PDF;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function pdf()
    {
        $data = 'Coba Pdf';
        // return view('pdf', compact('data'));
        $html = view('pdf', compact('data'))->render();
    
        $defaultOptions = PDF::getOptions();
        return PDF::setOptions($defaultOptions)->load($html)->filename('chart.pdf')->download();
    }
    
}
