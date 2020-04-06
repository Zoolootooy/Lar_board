<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'country_id',
        'phone',
        'email',
        'end_date',
        'photo',
        'latitude',
        'longitude'
    ];
}
