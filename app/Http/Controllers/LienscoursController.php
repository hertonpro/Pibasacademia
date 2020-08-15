<?php

namespace App\Http\Controllers;

use App\Coursmodel;
use App\Lienscoursmodel;
use Illuminate\Http\Request;

class LienscoursController extends Controller
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
        $liencours = Coursmodel::all();
        return view('admin/liencours/index', compact('liencours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lien = Coursmodel::all();
        return view('admin/liencours/create', compact('lien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'cours' => 'required|max:255',
            'link' => 'required|max:3',

        ]);
        $student = Lienscoursmodel::create($storeData);

        return redirect('/liencours')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $liencours_id
     * @return \Illuminate\Http\Response
     */
    public function show($liencours_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $liencours_id
     * @return \Illuminate\Http\Response
     */
    public function edit($liencours_id)
    {
        $formation = Lienscoursmodel::findOrFail($liencours_id);
        return view('admin/liencours/update', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $liencours_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $liencours_id)
    {
        $updateData = $request->validate([
            'cours' => 'required|max:255',
            'link' => 'required|max:3',
        ]);
        Lienscoursmodel::whereId($liencours_id)->update($updateData);
        return redirect('/liencours')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $liencours_id
     * @return \Illuminate\Http\Response
     */
    public function update2( $liencours_id)
    {
        // $updateData = $request('mame','deleted');
        // Lienscoursmodel::whereId($liencours_id)->update($updateData);
        return redirect('/liencours')->with('completed', 'Student has been updated');
    }
    public function destroy($liencours_id)
    {


        return redirect('/liencours')->with('completed', 'formation has been deleted');
    }
}
