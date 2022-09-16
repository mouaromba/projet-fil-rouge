<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TripRequest extends Model
{
    use HasFactory;
    function Vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    function User()
    {
        return $this->belongsTo(User::class);
    }
    function Driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function repport()
    {
        return $this->hasOne(TripRepport::class);
    }
}
