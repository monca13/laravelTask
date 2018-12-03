<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    //
    protected $table='Modules';
    public function getId(){
        return $this->id;
    }
    public function getModule(){
        return $this->modules;
    }
    public function lecturers(){
        return $this->hasMany('App\lecturer');
    }
}
