<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    public function fights()
    {
      return $this->hasMany('App\Models\Fight');
    }

    public function fighters()
    {
      return $this->hasMany('App\Models\Fighter');
    }
}
