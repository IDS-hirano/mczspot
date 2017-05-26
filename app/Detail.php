<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = array('inf_id','information','image_url','pla_id');

public function Places()
{
  return $this->belongsTo(Place::class);
}
}