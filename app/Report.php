<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
      'location',
      'image',
      'description',
      'reporter_id',
    ];
}
