<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'address', 'city', 'latitude', 'longitude']; // Define fillable attributes

   
}
