<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TripRepport extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function request()
    {
        return $this->belongsTo(TripRequest::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }
}
