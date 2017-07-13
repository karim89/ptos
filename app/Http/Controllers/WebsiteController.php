<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pt;
use App\Models\PtDetail;
use App\Models\Pm;
use App\Models\PmDetail;
use App\Models\Scheme;
use App\Models\Size;

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

    /**
     * Show the application pt.
     *
     * @return \Illuminate\Http\Response
     */
    public function pt()
    {
        $pt = Pt::where('scheme_id', 1)->paginate(20);
        $scheme = Scheme::find(1);
        return view('website.pt', compact('pt', 'scheme'));
    }

    /**
     * Show the application pt.
     *
     * @return \Illuminate\Http\Response
     */
    public function ptDetail($id)
    {
        $pt_detail = PtDetail::where('pt_id', $id)->paginate(20);
        $pt = Pt::find($id);
        $month = $this->month();
        return view('website.pt_detail', compact('pt', 'pt_detail', 'month'));
    }

    /**
     * Show the application pm.
     *
     * @return \Illuminate\Http\Response
     */
    public function pm()
    {
        $pm = Pm::where('scheme_id', 2)->paginate(20);
        $scheme = Scheme::find(2);
        return view('website.pm', compact('pm', 'scheme'));
    }

    /**
     * Show the application pt.
     *
     * @return \Illuminate\Http\Response
     */
    public function pmDetail($id)
    {
        $pm_detail = PmDetail::where('pm_id', $id)->paginate(20);
        $pm = Pm::find($id);
        return view('website.pm_detail', compact('pm', 'pm_detail'));
    }

    public function month()
    {
        return array('' => 'Please choose', 1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');
    }
    
}
