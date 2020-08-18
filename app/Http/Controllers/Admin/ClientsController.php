<?php

namespace App\Http\Controllers\Admin;
use App\faqmodel;
use App\descfaqmodel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=descfaqmodel::all();
        $faqs = faqmodel::all();
        return view('admin/', compact('faqs','categories'));
    }

}
