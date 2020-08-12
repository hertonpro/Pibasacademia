<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inboxController extends Controller
{
    //
    public function index()
    {
        return view('system/inbox');
    }

    public function show()
    {
        //
       //$mes = User::where('id',$mess);
        return view('system/message');
    }
}
