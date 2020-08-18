<?php

namespace App\Http\Controllers;

use App\SuivreModel;
use Illuminate\Http\Request;

class SuivreController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = request()->validate([
            'user_id' => 'required',
            'cours_id' => 'required',
            'status'=>'required'
        ]);
                // return redirect('forma/'.$data['user_id'])->with('completed', 'Student has been saved!');

        $user=SuivreModel::where('user_id',$data['user_id'] and 'cours_id',$data['cours_id'] );
            if($user->count()>0){
                return redirect('forma/'.$data['cours_id'])->with('completed', 'Student has been saved!');
            }else{
               $enr= SuivreModel::create([
                    'user_id' => $data['user_id'],
                    'cours_id' => $data['cours_id'],
                    'status'=>$data['status']
                    ]);
                    if($enr){
                return redirect('forma/'.$data['cours_id'])->with('completed', 'Student has been saved!');
                    }
            }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SuivreModel  $suivreModel
     * @return \Illuminate\Http\Response
     */
    public function show(SuivreModel $suivreModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuivreModel  $suivreModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SuivreModel $suivreModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuivreModel  $suivreModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuivreModel $suivreModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuivreModel  $suivreModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuivreModel $suivreModel)
    {
        //
    }
}
