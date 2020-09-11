<?php

namespace App\Http\Controllers;

,essuse App\Messageriemodel;
use Illuminate\Http\Request;
use App\User;
use App\user as AppUser;

class inboxController extends Controller
{
    //
    public function index()
    {

        $messages=Messageriemodel::all();
        $user=User::all();
        return view('system/inbox',compact('messages'));
    }

    public function show()
    {
       //$mes = User::where('id',$mess);
        return view('system/message');
    }
}
