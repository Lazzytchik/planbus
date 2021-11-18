<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use HasFactory;

    public function route(){
        return $this->hasOne(BusRoute::class, 'id', 'route_id');
    }
    public function stops(){
        return $this->hasMany(Stop::class, 'id', 'stop_id');
    }
}
