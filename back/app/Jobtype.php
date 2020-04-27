<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    protected $guarded = ['id'];

    public function elements(){
        return $this->hasMany('App\Element');
    }
}
