<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $fillable = [
        'title',
        'duration', 
        'season',
        'description',
        'image'
    ];
}