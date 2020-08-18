<?php

namespace App\Http\Controllers;

use App\articles;
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
<<<<<<< HEAD

        $img = request('img')->store('articlesImg','public');

        $student = articles::create([
=======
        $img = request('img')->store('articlesImg','public');
          $student = articles::create([
>>>>>>> 9a52a21295ee34c81a59255643d1fd84ce190384

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

