<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = [
      'title', 'venue', 'date', 'description', 'image',
    ];
}
