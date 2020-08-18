<?php

namespace App\Http\Controllers;

use App\Coursmodel;
use App\formationM;
use App\Lienscoursmodel;
use Illuminate\Http\Request;

class LienscoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liencours =Lienscoursmodel::all();
        $formation=formationM::all();
        return view('admin/liencours/index', compact('liencours','formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lien = formationM::all();
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
            'cours' => 'required|max:3',
            'link' => 'required|max:10000',

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
        $formation = formationM::all();
        $lien = Lienscoursmodel::where('liencours_id',$liencours_id)->firstOrfail();;
        return view('admin/liencours/update', compact('formation','lien'));
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
            'cours' => 'required|max:3',
            'link' => 'required|max:1255',
        ]);
        Lienscoursmodel::where('liencours_id',$liencours_id)->update($updateData);
        return redirect('/liencours')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $liencours_id
     * @return \Illuminate\Http\Response
     */

    public function destroy($liencours_id)
    {


        return redirect('/liencours')->with('completed', 'formation has been deleted');
    }
}
