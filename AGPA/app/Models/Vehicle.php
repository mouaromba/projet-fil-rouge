<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = [];
    function TripRequest()
    {
        return $this->hasMany(TripRequest::class);
    }

    function TripRepport()
    {
        return $this->belongsTo(TripRepport::class);
    }
}
