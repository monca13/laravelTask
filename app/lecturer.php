<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    //
    public function faculties(){
        return $this->hasMany('App\Models\faculty','faculty','id');
    }
}
