<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ixudra\Curl\Facades\Curl;

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
    public function index(Request $request)
    {
        $callBack = $request->session()->get("callBack");
        if(isset($callBack)){
            $callBack = $callBack."?userLogged=".json_encode(Auth::user());
        }else{
            return view('home');
        }

        return redirect($callBack);
    }

    public function index2(){
        return view('home');
    }
}
