<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = array('pre_id','prefecture');


public function place()
{
  return $this->hasMany(Place::class);
}
}