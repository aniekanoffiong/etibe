<?php

namespace App;
use APP\profile
use APP\user
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'id', 'user_id', 'phone_no' ,'avatar', 
    ];
}

public function user()
	{
		return $this->hasone('profile');
	}
public function profile()
	{
		return $this->belongsTo('user');
	}