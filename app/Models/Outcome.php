<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    public function game(){
    	return $this->belongsTo('App\Models\Game');
    }
}
