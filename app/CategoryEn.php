<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryEn extends Model
{
    public function categoryEn()
    {
        return $this->hasMany('App\BlogEn');
    }
}
