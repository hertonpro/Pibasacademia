<?php

namespace App\Http\Controllers\Admin;

use App\formationM;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
public function index()
    {

        $formations  = formationM::all();
        return view('system/board',compact('formations'));
    }
}
