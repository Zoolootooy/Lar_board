<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
      'id',
      'name',
      'ISO2',
      'ISO3'
    ];
}
