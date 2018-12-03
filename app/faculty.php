<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    //
    protected $table='faculties';
    public function getId(){
        return $this->id;
    }

    public function lecturers(){
        return $this->hasMany('App\lecturer');
    }

}
