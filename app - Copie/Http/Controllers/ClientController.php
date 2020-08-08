<?php

namespace App\Http\Controllers;

use App\Clientmodel;
use App\User;
use App\ClientModele;
use App\user as AppUser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = user::all();
        return view('admin/client/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/client/create');
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
                'name1' => ['required', 'string', 'max:255'],
                'name2' => ['required', 'string', 'max:255'],
                'numTel' => ['required', 'sting','min:9', 'max:13','unique:users'],
                'numCart' => ['required', 'string', 'min:5', 'max:255','unique:users'],
                'payement' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8']
        ]);
        $student = user::create($storeData);

        return redirect('/clients')->with('completed', 'clients has been saved!');
    }

    /**
     *
     *  Display the specified resource.
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
        $clients = Clientmodele::findOrFail($id);
        return view('admin/client/edit', compact('clients'));
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
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'telephone' => 'required|numeric',
            'password' => 'required|max:255',
        ]);
        ClientModele::whereId($id)->update($updateData);
        return redirect('/clients')->with('completed', 'clients has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clientmodele::findOrFail($id);
        $client->delete();

        return redirect('/clients')->with('completed', 'clients has been deleted');
    }

}
