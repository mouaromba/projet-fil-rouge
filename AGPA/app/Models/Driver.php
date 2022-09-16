<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;
    protected $guarded = [];

    function User()
    {
        return $this->belongsTo(User::class);
    }

    function TripRequest()
    {
        return $this->hasMany(TripRequest::class);
    }
}
