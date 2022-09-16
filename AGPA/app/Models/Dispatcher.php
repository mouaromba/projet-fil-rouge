<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dispatcher extends Model
{
    use HasFactory;
    protected $guarded = [];

    function User()
    {
        return $this->belongsTo(User::class);
    }
}
