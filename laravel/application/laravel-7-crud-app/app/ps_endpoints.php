<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ps_endpoints extends Model
{
     /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
protected $keyType = 'string';

 protected $fillable = [
        'id',
	'transport',
        'aors',
        'auth',
        'context',
        'disallow',
        'allow',
	'direct_media',
	'force_rport',
	'rewrite_contact',
	'rtp_symmetric',
	'call_group',
	'pickup_group'
    ];
    public $timestamps = false;
}
