<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'destination',
        'duration_days',
        'price',
        'is_featured',
        'inclusions',
        'exclusions',
        'image',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'inclusions' => 'array',
        'exclusions' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}