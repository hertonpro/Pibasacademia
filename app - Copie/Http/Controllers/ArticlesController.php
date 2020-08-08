<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
{
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
        //
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

         //dd($request('img'));
        $img = request('img')->store('articlesImg','public');

        // $image = Image::make(public_path("storage/{$img}"))->fit(1200,700);
        // $image->save();

        $student = articles::create([

            'titre' => $data['titre'],
            'img' => $img,
            'content' => $data['content']

        ]);

        return redirect('/articles')->with('completed', 'article has been saved!');
    }
    private function getfile(Request $request){
        if (request('img')) {
            # code...
            $request->update([
                'img' =>request('img')->store('articlesfiles','public'),
            ]);
        }
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
        //
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
        //
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
