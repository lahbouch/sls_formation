<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';

    protected $fillable = [
        'phone',
        'email',
        'address',
        'facebook_url',
        'twitter_url',
        'instagram_url',
    ];
}
