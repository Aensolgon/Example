<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Linkmenu;

class Page extends Model
{
    public function linkMenu(){
        return $this->hasOne('App\Linkmenu');
    }
}
