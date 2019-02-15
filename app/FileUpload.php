<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{

    protected $table = "file_uploads";

    public function alfabet(){
        return $this->belongsTo('App/Alfabet');
    }
}
