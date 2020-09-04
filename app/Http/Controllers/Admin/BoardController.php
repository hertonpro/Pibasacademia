<?php

namespace App\Http\Controllers\Admin;

use App\articles;
use App\Coursmodel;
use App\retraits;
use App\formationM;
use App\Http\Controllers\Controller;
use App\Lienscoursmodel;
use App\SuivreModel;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

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
        $formations  = formationM::all();
        $formations=formationM::all();
        $liens=Lienscoursmodel::all();
        $cours=Coursmodel::all();
        $users=User::all();
        $retrait=retraits::all();
        $suivres=SuivreModel::all();
        $articles=articles::orderBy('created_at', 'desc')->get();
        return view('system/board',
        compact(
            'formations','retraits','retraits1','formations','liens','cours',
            'retraits','suivres','users','articles'
        ));
    }
    public Function suivremembre($suivre){
        $datecours=Coursmodel::where('cours_id',$suivre)->firstOrfail();
        $retraits = retraits::where('statu', 0)->get();
        $retraits1 = retraits::where('statu', 1)->get();
        $formations  = formationM::all();
        $formations=formationM::all();
        $liens=Lienscoursmodel::all();
        $suivremembre=SuivreModel::where('cours_id',$suivre)->get();
        $cours=Coursmodel::all();
        $user=User::all();
        $retrait=retraits::all();
        $suivre=SuivreModel::all();
        return view('system/suivre',
        compact(
            'formations','retraits','retraits1','formations','liens','cours',
            'retraits','suivre','user','suivremembre','datecours'
        ));
    }
    public function calendrier(){
        $retraits = retraits::where('statu', 0)->get();
        $retraits1 = retraits::where('statu', 1)->get();
        $formations  = formationM::all();
        $formations=formationM::all();
        $liens=Lienscoursmodel::all();
        $cours=Coursmodel::all();
        $user=User::all();
        $retrait=retraits::all();
        $suivre=SuivreModel::all();
        return view('system/calendriercours',
        compact(
            'formations','retraits','retraits1','formations','liens','cours',
            'retraits','suivre','user'
        ));

    }
}


