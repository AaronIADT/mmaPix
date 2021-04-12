<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;

    public function event()
    {
      return $this->belongsTo('App\Models\Event');
    }

    public function fighterA()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id_1');
    }

    public function fighterB()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id_2');
    }
}
