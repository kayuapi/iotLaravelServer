<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compartment extends Model
{
    public function item() {
        return $this->belongsTo('App\Item');
    }
    
    public function records() {
        return $this->hasMany('App\Record');
    }    
}
