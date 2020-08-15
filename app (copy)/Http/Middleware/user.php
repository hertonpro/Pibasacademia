<?php

namespace App;
use App\Request;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    function algo($id){
        $user = user::where('id', $id)->firstOrfail();
        /// carte
        $carte=new cartemodel();
        $carte->id_user=$user->id;
        $carte->montant=1;
        $carte->status=0;
        $carte->save();

        //brevet
        $brevet=new brevetmodel();
        $brevet->id_user=$user->id;
        $brevet->montant=1;
        $brevet->status=0;
        $brevet->save();

        //parainage
        $parainage=new parainagemodel();
        $parainage->id_user=$user->id;
        $parainage->parain=$user->matricule;
        $parainage->montant=10;
        $parainage->status=0;
        $parainage->save();

        //brevet
        $ordinateur=new ordinateurmodel();
        $ordinateur->id_user=$user->id;
        $ordinateur->montant=1;
        $ordinateur->status=0;
        $ordinateur->save();

        //montants a partager
        $montant=31.5*0.25;
        //herton
        $herton=new hertonmodel();
        $herton->id_user=$user->id;
        $herton->montant=$montant;
        $herton->status=0;
        $herton->save();
        //pibas
        $pibas=new Pibasmodel();
        $pibas->id_user=$user->id;
        $pibas->montant=$montant;
        $pibas->status=0;
        $pibas->save();

        //associer1
        $Associer1=new Associer1model();
        $Associer1->id_user=$user->id;
        $Associer1->montant=$montant;
        $Associer1->status=0;
        $Associer1->save();
        //associer2
        $Associer2=new Associer2model();
        $Associer2->id_user=$user->id;
        $Associer2->montant=$montant;
        $Associer2->status=0;
        $Associer2->save();

        //associer2
        $fonctionnement=new fonctionnementmodel();
        $fonctionnement->id_user=$user->id;
        $fonctionnement->montant=$montant;
        $fonctionnement->status=0;
        $fonctionnement->save();






    }
}
