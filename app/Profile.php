<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id', 'phone', 'avatar',
  ];

  public function user()
  {
    return $this->belongsTo('User');
  }

}
