<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alfabet extends Model
{
    public function fileUpload(){
        return $this->hasMany('App/FileUpload');
    }
}
