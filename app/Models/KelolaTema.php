<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelolaTema extends Model
{
    use HasFactory;

    protected $table = 'kelola_tema';

    protected $fillable = [
        'background_image',
        'logo_image',
        'menu_navigation',
    ];

    protected $casts = [
        'menu_navigation' => 'json', 
    ];
}