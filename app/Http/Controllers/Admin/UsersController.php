<?php

namespace App\Http\Controllers\Admin;

use App\admin;
use App\formationM;
use App\User;
use App\Mcart;
use App\Mbrev;
use App\Mord;
use App\Mpibas;
use App\Mherton;
use App\Mass1;
use App\Mass2;
use App\Mass3;
use App\Http\Controllers\Controller;
use App\Lienscoursmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
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
        $countclients = User::all();
        $formations=formationM::all();
        $countclients = User::where('role',0);
        $countclien=Lienscoursmodel::all();
        return view('system/users/index',compact('countclients','formations','countclien'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('system/users/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data){

         return Validator::make($data, [
            'name1' => ['required', 'string', 'max:255'],
            'name2' => ['required', 'string', 'max:255'],
            'numTel' => ['required', 'sting','min:9', 'max:13'],
            'numCart' => ['required', 'string', 'min:5', 'max:255'],
            'pin' => ['required', 'sting','max:255'],
            'parrain' => ['required', 'string'],
            'role' => ['required', 'string', 'max:1'],
            'montant' => ['required', 'string', 'min:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function store(request $data){

       $password1 = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, 10);
       $code=rand(1000000000,9999999999);
       $pin = dechex($code);

       if(request('parrain') == 'PBHR-001-DT' || User::where('pin', request('parrain'))->exists()){
            $parrain = request('parrain');
            $hh = User::create([
                'name1' => $data['name1'],
                'name2' => $data['name2'],
                'numTel' => $data['numTel'],
                'numCart' => $data['numCart'],
                'pin' => $pin,
                'parrain' => $parrain,
                'role' => $data['role'],
                'montant' => 0,
                'email' => $data['email'],
                'password' => Hash::make($password1)
            ]);

            $pp = User::where('pin', $pin)->firstOrfail();

            if(User::where('pin', request('parrain'))->exists()){

        $retraits = retraits::where('statu', 0);
                $dd = User::where('pin', request('parrain'))->firstOrfail();

                $montant = $dd->montant + 10;
                User::whereId($dd->id)->update(['montant' => $montant]);
                Mbrev::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 1]);
                Mcart::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 4]);
                Mord::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 22.5]);
                Mpibas::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 31.25]);
                Mherton::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 31.25/4]);
                Mass1::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 31.25/4]);
                Mass2::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 31.25/4]);
                Mass3::create(['user' => $pp->id,'parrain' => $dd->id,'montant' => 31.25/4]);
            }

            return view('system/users/confirm', compact('pp','password1'));
       }else{
            return redirect('/users/create')->with('Erreur', 'article has not been saved!');
       }
    }


     public function algo(user $user)
    {
       //$pp = User::where('pin', $pin)->firstOrfail();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
        $users = User::where('id',$user);
        return view('system/users/single', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
        return view('system/users/update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //

    }
}
