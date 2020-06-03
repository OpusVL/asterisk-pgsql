<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ps_auth extends Model
{
    protected $fillable = [
    'id',
	'auth_type',
	'username',
	'password'
    ];
}
