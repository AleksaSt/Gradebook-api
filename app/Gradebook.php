<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;

class Gradebook extends Model
{
    protected $fillable = ['name'];

    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}
