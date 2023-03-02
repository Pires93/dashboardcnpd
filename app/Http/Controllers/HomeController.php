<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countA = DB::table('videovigilancias')->count();
        $countB = DB::table('geolocalizacaos')->count();
        $countC = DB::table('interconexaos')->count();
        $countTotal = $countA + $countB + $countC; 
 
        return view('home')->with('countTotal',$countTotal);
    }

    
    public function login()
    {
        $countA = DB::table('videovigilancias')->count();
        $countB = DB::table('geolocalizacaos')->count();
        $countC = DB::table('interconexaos')->count();
        $countTotal = $countA + $countB + $countC; 
 
        return view('home')->with('countTotal',$countTotal);
    }


}
