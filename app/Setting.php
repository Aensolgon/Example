<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    function typeOfApplication(){
        return $this->hasOne("App\TypeOfApplication");
    }
}
