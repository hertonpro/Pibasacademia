<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name1','name2','numTel','numCart','pin','parrain','role','montant','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){

<<<<<<< HEAD
        return $this->hasOne('App\Profile');}
=======
        return $this->hasOne('App\Profile');
    }
>>>>>>> 203a77e0e5be32169dcea8cbb633fc69c9493b5d
    public function profil(){
        return $this->hasOne('App\profilModel2');

    }
    public function profilphoto(){
        return $this->hasMany('App\profilModel');

    }
}
