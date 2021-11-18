<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use HasFactory;

    public function station(){
        return $this->hasOne(Station::class, 'station_id', 'stop_id');
    }

    public function route(){
        return $this->hasOne(BusRoute::class,'route_id', 'id');
    }
}
