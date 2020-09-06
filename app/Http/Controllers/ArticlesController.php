<?php

namespace App\Http\Controllers;

use App\articles;
use App\Coursmodel;
use App\formationM;
use App\Lienscoursmodel;
use App\retraits;
use App\SuivreModel;
use App\User;
use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
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
        $articles = articles::all();
       return view('admin/articles/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/articles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'titre' => ['required','max:255'],
            'img' => ['required','image'],
            'content' => 'required'
        ]);
        $img = request('img')->store('articlesImg','public');
          $student = articles::create([

            'titre' => $data['titre'],
            'img' => $img,
            'content' => $data['content']

        ]);

        return redirect('/articles')->with('completed', 'article has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $article = articles::where('id', $id)->firstOrfail();
        return view('admin/articles/single', compact('articles','formations','retraits',
        'retraits1','formations','liens','cours',
        'retraits','suivres','users','article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $blogs = aproposmodel::findOrFail($apropos_id);
        $articles = articles::where('id', $id)->firstOrfail();
        return view('admin/articles/update', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'titre' => ['required','max:255'],
            'img' => ['required','image'],
            'content' => 'required'
        ]);
        $img = request('img')->store('articlesImg','public');


        $student = articles::
        create([

            'titre' => $data['titre'],
            'img' => $img,
            'content' => $data['content']

        ]);

        return redirect('/articles')->with('completed', 'article has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $articles = articles::findOrFail($id);
         $articles->delete();


        return redirect('/articles')->with('completed', 'article has been deleted');
    }
}

