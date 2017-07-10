<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archive;

class WebsiteController extends Controller
{
    
    /**
     * Show the application home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the application register.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('website.register');
    }

    /**
     * Show the application about.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('website.about');
    }
    
}
