<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Group extends Model
{
    public function user()
	{
		$this->hasMany('User');
	}
}
