<?php

namespace App\Http\Controllers;

use App\articles;
use App\Coursmodel;
use App\descfaqmodel;
use App\faqmodel;
use App\formationM;
use App\formationModel;
use App\Lienscoursmodel;
use App\SuivreModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;



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
        return view('home');
    }
    public function apropos(){
        return view('clientacceuil');

    }
    public function faq(){
        $faqe=faqmodel::all();
        $categorie=descfaqmodel::all();
        return view('faq',compact('faqe','categorie'));

    }

    public function blog(){
        return view('blog');

    }
    public function contact(){
        return view('contact');
    }
   /* public function login(){
        return view('auth/login');
    }*/
    public function formation($formation_id){
        $countclients = User::all();
        // $cours=Coursmodel::all();
        $suivre=SuivreModel::all();
        $coursid=Coursmodel::all();
        $articles=articles::all();
        $liens=Lienscoursmodel::all();
        $formations=formationM::where('formation_id', $formation_id)->firstOrfail();
        return view('system/formation',compact('countclients','formations','coursid','suivre','articles','liens'));
    }
    public function formatio()
    {
        $countclients = User::all();
        $cours=Coursmodel::all();
        $formations=formationM::all();
        $suivre=SuivreModel::all();
        return view('system/formations',compact('countclients','formations','cours','suivre'));
    }

}

