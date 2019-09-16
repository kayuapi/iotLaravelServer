<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function compartments() {
        return $this->hasMany('App\Compartment');
    }
    
    public function records() {
        return $this->hasManyThrough('App\Record', 'App\Compartment');
    }
}
