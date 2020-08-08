<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courss = Coursmodel::all();
        return view('admin/cours/index', compact('courss'));
=======
    public function index()
    {
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $formations = formationModel::all();
        $users = User::all();

        return view('admin/cours/create', compact('formations','users'));
=======
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $storeData = $request->validate([
            'formateur' => 'required|numeric',
            'datecours' => 'required|max:255',
            'formation' => 'required|numeric',
        ]);
        $student = Coursmodel::create($storeData);

        return redirect('/courss')->with('message', 'Student has been saved!');
=======
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function show($cours_id)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  int  $cours_id
     * @return \Illuminate\Http\Response
     */
    public function edit($cours_id)
    {
        $formations = formationModel::all();
        $users = User::all();
        $courss = Coursmodel::where('cours_id', $cours_id)->firstOrfail();
        return view('admin/cours/update', compact('courss','users','formations'));
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
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
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
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
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
>>>>>>> 563d67d19e6b8c3b4f1c64ff911aa9a8417c6985
    }
}
