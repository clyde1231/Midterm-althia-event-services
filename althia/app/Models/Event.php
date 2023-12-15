<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'navbar_status',
        'status',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'event_id', 'id');
    }
}
