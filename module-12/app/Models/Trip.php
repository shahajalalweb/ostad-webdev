<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['departure_city', 'arrival_city', 'departure_time', 'arrival_time']; // Define fillable attributes

    // Define relationship with Ticket model (assuming one trip can have many tickets)
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // Your additional model logic, methods, scopes, etc.
}

