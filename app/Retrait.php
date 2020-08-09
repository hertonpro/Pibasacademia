<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mass1 extends Model
{
    //
    protected $fillable = ['user', 'montant','statu'];

protected $hidden = [
        'statu', 'agent','conf',
    ];
}

