<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    //
    public function subject(){
        return $this->hasMany('App\Subject');
     }
}
