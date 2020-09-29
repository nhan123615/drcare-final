<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    
    public function doctors(){
        return $this->belongsTo('App\Models\user\doctor');
    }


}
