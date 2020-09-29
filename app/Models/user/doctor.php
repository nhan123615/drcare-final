<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    public function appointments(){
        return $this->hasMany('App\Models\user\appointment');
    }
}
