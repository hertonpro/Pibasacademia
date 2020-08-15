<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profilModel extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
