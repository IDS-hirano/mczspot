<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = array('pla_id','place_name','pre_id');

public function Prefecture()
{
  return $this->belongsTo(Prefecture::class);
}

public function Detail()
{
  return $this->belongsTo(Detail::class);
}
}
