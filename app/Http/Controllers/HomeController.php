<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

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

    public function home(){
        $phones = Phone::all();

        return view('home')->with($phones);

    }



   
}
