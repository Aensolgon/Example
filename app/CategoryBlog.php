<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    public function categoryEn()
    {
        return $this->hasMany('App\Blog');
    }
}
