<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $guarded = ['id'];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function jobtype(){
        return $this->belongsTo('App\Jobtype');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
