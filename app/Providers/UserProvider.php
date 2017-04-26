<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

class UserProvider extends ServiceProvider
{
    public static function getAllUsers()
	{
		return User::all();
	}
	
	
}
