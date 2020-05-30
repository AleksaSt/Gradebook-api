<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;

class Professor extends Model
{
    public function gradebook(){
        return $this->hasOne(Gradebook::class);
    }
    
}
