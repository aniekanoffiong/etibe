<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Account extends Model
{
	protected $fillable = [
        'account_no', 'account_name', 'bank_id',
    ];
	
	public $incrementing = false;
	
	public function user()
	{
		$this->belongsTo('User');
	}
}
