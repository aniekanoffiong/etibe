<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\Currentgroup;

class Currentgroup extends Model
{
   public function currentgroup()
  {
    return $this->belongsToMany('Users');
  }
}
