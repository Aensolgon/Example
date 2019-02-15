<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class Linkmenu extends Model
{
    public function page()
    {
        return $this->belongsTo('App\Page');
    }
}
