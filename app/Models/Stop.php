<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    public function paths(){
        return $this->hasMany(Path::class, 'stop_id', 'id');
    }

    public function stations(){
        return $this->hasOne(Station::class, 'stop_id', 'id');
    }

}
