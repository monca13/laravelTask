<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    //
    protected $table = 'lecturers';

public function faculty(){
    return $this->belongsTo('App\faculty');
}
public function module(){
    return $this->belongsTo('App\module');
}
}
