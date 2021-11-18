<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    public function city(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function endpoints(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Endpoint::class, 'station_id', 'stop_id');
    }
}
