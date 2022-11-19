<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['wallpaper',
        'cards_logo',
        'cards_title',
        'twitter',
        'instagram',
        'facebook',
        'linkdin',
        'email_id',
        'googlemap',
    ];
}