<?php

namespace App\Http\Controllers\Admin;

use App\Coursmodel;
use App\formationModel;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CoursController extends Controller
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
        $courss = Coursmodel::all();
        return view('system/formation/index', compact('courss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations = formationModel::all();
        $users = User::all();

        return view('admin/cours/create', compact('formations','users'));
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
            'formateur' => 'required|numeric',
            'datecours' => 'required|max:255',
            'formation' => 'required|numeric',
        ]);
        $student = Coursmodel::create($storeData);

        return redirect('/courss')->with('message', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function show($cours_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function edit($cours_id)
    {
        $formations = formationModel::all();
        $users = User::all();
        $courss = Coursmodel::where('cours_id', $cours_id)->firstOrfail();
        return view('admin/cours/update', compact('courss','users','formations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cours_id)
    {
        $updateData =  $request->validate([
            'formateur' => 'required|numeric',
            'datecours' => 'required|numeric',
            'formation' => 'required|max:255',
        ]);
        Coursmodel::where('cours_id', $cours_id)->update($updateData);
        return redirect('/courss')->with('message', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function update2( $cours_id)
    {
        // $updateData = $request('mame','deleted');
        // Coursmodel::whereId($cours_id)->update($updateData);
        return redirect('/courss')->with('message', 'Student has been updated');
    }
    public function destroy($cours_id)
    {


        return redirect('/courss')->with('message', 'cours has been deleted');
    }
}
