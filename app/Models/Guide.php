<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'languages',
        'experience_years',
        'bio',
        'specialization',
        'image',
    ];

    protected $casts = [
        'languages' => 'array',
    ];
}