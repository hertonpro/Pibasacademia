<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    //
public function index()
    {
        //$articles = articles::all();
        return view('system/board');
    }
}
