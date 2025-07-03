<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_number';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'room_number',
        'rate',
        'room_name',
        'room_description',
        'room_image',
        'amenities',
        'offer',
    ];

    protected $casts = [
        'amenities' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_number', 'room_number');
    }
}