<?php

namespace App\Http\Controllers;

use App\formationM;
use Illuminate\Http\Request;

class FormationController extends Controller
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
        $formations = formationM::all();
        return view('admin/formation/index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/formation/create');
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
            'titre' => 'required|max:255',
            'resume' => 'required|max:1255',

        ]);
        $student = formationM::create($storeData);

        return redirect('/formations')->with('completed', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $formation_id
     * @return \Illuminate\Http\Response
     */
    public function show($formation_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $formation_id
     * @return \Illuminate\Http\Response
     */
    public function edit($formation_id)
    {
        $formation = formationM::findOrFail($formation_id);
        return view('admin/formation/update', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $formation_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formation_id)
    {
        $updateData = $request->validate([
            'titre' => 'required|max:1255',
            'resume' => 'required|max:12055',
        ]);
        formationM::whereId($formation_id)->update($updateData);
        return redirect('/formations')->with('completed', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $formation_id
     * @return \Illuminate\Http\Response
     */
    public function update2( $formation_id)
    {
        // $updateData = $request('mame','deleted');
        // formationM::whereId($id)->update($updateData);
        return redirect('/formations')->with('completed', 'Student has been updated');
    }
    public function destroy($formation_id)
    {
        return redirect('/formations')->with('completed', 'formation has been deleted');
    }
}
