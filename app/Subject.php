<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    public function required(){
        return $this->hasMany('App\Required');
     }
}
