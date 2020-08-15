<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
public function index()
    {
        $retraits = retraits::where('statu', 0)->get();
        $retraits1 = retraits::where('statu', 1)->get();
        return view('system/board', compact('retraits','retraits1'));
    }
}

