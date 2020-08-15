<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
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
    public function index()
    {
        return view('/admin/Contact/liste');
    }
    public function create()
    {
    # code...

    return view('/admin/Contact/liste');

    }
    public function update(Request $request,$id)
    {
    return $request->all();
    return view('/admin/Contact/liste');

    }
    public function delete()
    {
        return view('/admin/Contact/liste');
    }
}
