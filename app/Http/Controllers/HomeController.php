<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
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
        $countD = DB::table('gerals')->count();
        $countE = DB::table('tics')->count();
        $countF = DB::table('biometrias')->count();
        $countTotal = $countA + $countB + $countC + $countD + $countE + $countF; 
 
        return view('home')->with('countTotal',$countTotal);
    }

    
    public function login(Request $request)
    {
        $countA = DB::table('videovigilancias')->count();
        $countB = DB::table('geolocalizacaos')->count();
        $countC = DB::table('interconexaos')->count();
        $countTotal = $countA + $countB + $countC; 

       //$log = new Log;
        //$log->user_id = auth()->user()->id;
       // $log->action = 'Login in';
      /*  $log->ip_address = $request->ip();
        $log->user_agent = $request->userAgent();
        $log->save();*/
 
        return view('home')->with('countTotal',$countTotal);

    }


}
