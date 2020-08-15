<?php

namespace App\Http\Controllers\Admin;

use App\retraits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
	public function index()
    {
        $retraits = retraits::where('statu', 0)->get();
        $retraits1 = retraits::where('statu', 1)->get();
        return view('system/board', compact('retraits','retraits1'));
    }
}


