<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function compartment() {
        return $this->belongsTo('App\Compartment');
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
        
}
