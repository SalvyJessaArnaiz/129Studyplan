<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studyplan extends Model
{
    
    public function semester(){
        return $this->hasMany('App\Semester');
     }//
     
}
