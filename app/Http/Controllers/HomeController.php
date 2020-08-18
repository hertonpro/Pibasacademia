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
    // public function __construct()
    // {
    //      $this->middleware('auth');
    // }

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
        $articlesRECENT=articles::orderBy('created_at', 'desc')->limit(5)-> get();
        $formations=formationM::orderBy('created_at', 'desc')->limit(5)-> get();
        $suivre=SuivreModel::all();
        $coursid=Coursmodel::all();
        $images=articles::all();
        $articles=articles::orderBy('created_at', 'desc')->get();
        $liens=Lienscoursmodel::all();

        return view('blog',compact('coursid','suivre','articles','liens','articlesRECENT','images','formations'));

    }
    public function article ($id){

        $suivre=articles::all();
        $coursid=Coursmodel::all();
        $articles=articles::findOrFail($id);
        $liens=Lienscoursmodel::all();
        $articlesRECENT=articles::orderBy('created_at', 'desc')->limit(6)->get();
        return view('article',compact('coursid','suivre','articles','liens','articlesRECENT'));

    }
    public function contact(){
        return view('contact');
    }
   /* public function login(){
        return view('auth/login');
    }*/
    public function formation($formation_id){
        $countclients = User::all();
        $suivre=SuivreModel::all();
        $suivref=SuivreModel::where('cours_id', $formation_id)->get();
        $coursid=Coursmodel::where('formation', $formation_id)->get();
        $articles=articles::all();
        $articlesRECENT=articles::orderBy('created_at', 'desc')->limit(6)->get();
        $liens=Lienscoursmodel::where('cours', $formation_id)->get();
        $formations=formationM::where('formation_id', $formation_id)->firstOrfail();
<<<<<<< HEAD
        return view('system/formation',compact('countclients','formations','coursid','articlesRECENT','suivre','articles','liens'));
=======
        return view('system\formation',compact('countclients','formations','coursid','articlesRECENT','suivre','articles','liens','suivref'));
>>>>>>> 9a52a21295ee34c81a59255643d1fd84ce190384
    }
    public function formatio()
    {
        $countclients = User::all();
        $cours=Coursmodel::all();
        $formations=formationM::all();
        $suivre=SuivreModel::all();
        $articlesRECENT=articles::orderBy('created_at', 'desc')->limit(6)->get();
        return view('system/formations',compact('countclients','formations','articlesRECENT','cours','suivre'));
    }

}

