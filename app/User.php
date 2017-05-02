<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Group;
use App\Payment;
use App\Profile;
use APP\currentgroup;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'auth_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public $incrementing = false;

	public function group()
	{
		return $this->belongsToMany('Group');
	}

	public function payment()
	{
		return $this->hasMany('Payment');
	}

  public function profile()
  {
    return $this->hasOne('Profile');
  }
  public function currentgroup()
  {
    return $this->belongsToMany('users');
  }

}
