<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function typeOfApplication(){
        return $this->hasMany('App\TypeOfApplication');
    }
}
