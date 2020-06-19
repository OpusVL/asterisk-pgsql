<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ps_auth extends Model
{

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
protected $keyType = 'string';
    protected $fillable = [
    'id',
	'auth_type',
	'username',
	'password'
    ];
    
    public $timestamps = false;
}
