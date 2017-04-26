<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\UserProvider;

class UserController extends Controller
{
    public function allUsers()
	{
		return UserProvider::getAllUsers();
	}
}
