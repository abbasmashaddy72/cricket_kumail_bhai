<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'qualification',
        'department',
        'about',
        'experience',
    ];

    protected $casts = [
        'experience' => 'date:Y-m-d',
    ];
}
