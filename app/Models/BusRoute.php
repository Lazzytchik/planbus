<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $table = 'routes';

    public function stops(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Path::class, 'route_id', 'id');
    }

    public function endpoints(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Endpoint::class, 'route_id', 'id');
    }
}
