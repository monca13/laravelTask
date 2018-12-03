<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    //
    public function getId(){
        return $this->id;
    }
    public function getModule(){
        return $this->modules;
    }
}
