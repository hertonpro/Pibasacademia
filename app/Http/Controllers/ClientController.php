<?php

namespace App\Http\Controllers;

use App\Clientmodel;
use App\ClientModele;
use App\User;
use Illuminate\Http\Request;

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
        $clients = User::all();
        return view('system/clients', compact('clients'));
    }

}
