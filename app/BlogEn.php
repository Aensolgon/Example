<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogEn extends Model
{
    public function blogEn()
    {
        return $this->belongsTo('App\CategoryEn');
    }
}
