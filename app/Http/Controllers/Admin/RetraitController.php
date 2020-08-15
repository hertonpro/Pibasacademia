<?php

namespace App\Http\Controllers\Admin;

use App\retraits;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetraitController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrait(Request $request)
    {
        $data = request()->validate([
            'montant' => ['required','max:255'],
            'user' => 'required'
        ]);

        retraits::create([
            'pinCl' => $data['user'],
            'montant' => $data['montant']
        ]);
        return redirect('/users')->with('Erreur', 'article has not been saved!');
       
    }

    public function valide(Request $request)
    {
   
        retraits::where('id', request('id'))->update(['statu' => 1]);
        return redirect('/board')->with('Erreur', 'article has not been saved!');
       
    }
     public function confirm(Request $request)
    {
        if(User::where('id',  request('pinCl'))->firstOrfail()->montant > request('montant')){

            $data = User::where('id',  request('pinCl'))->firstOrfail()->montant - request('montant');
            retraits::where('id', request('id'))->update(['statu' => 2]);
            User::where('id', request('pinCl'))->update(['montant' => $data]);
        }
        

        return redirect('/board')->with('Erreur', 'article has not been saved!');
       
    }
}
