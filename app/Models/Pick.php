<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    use HasFactory;

    public function user()
    {
      return $this->belongsTo('App\Models\user');
    }

    public function event()
    {
      return $this->belongsTo('App\Models\Event');
    }

    public function fights()
    {
      return $this->hasMany('App\Models\fight');
    }

    public function pick1()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id1');
    }

    public function pick2()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id2');
    }

    public function pick3()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id3');
    }

    public function pick4()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id4');
    }

    public function pick5()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id5');
    }

    public function pick6()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id6');
    }

    public function pick7()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id7');
    }

    public function pick8()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id8');
    }

    public function pick9()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id9');
    }

    public function pick10()
    {
      return $this->hasOne('App\Models\Fighter', 'id', 'fighter_id10');
    }
}
