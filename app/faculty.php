<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    //
    public function modules(){
        return $this->hasMany('App\Models\Module','faculty_id','id');
    }
}
