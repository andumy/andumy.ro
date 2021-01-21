<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $guarded = ['id'];
    
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    
    public function jobtype(){
        return $this->belongsTo('App\Models\Jobtype');
    }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
