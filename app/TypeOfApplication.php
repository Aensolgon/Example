<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfApplication extends Model
{
    public function request(){
        return $this->belongsTo('App\Request');
    }
}
