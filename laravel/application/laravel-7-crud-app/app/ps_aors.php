<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ps_aors extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
protected $keyType = 'string';
    protected $fillable = [
        'id',
        'max_contacts',
        'remove_existing'
        ];
    
    public $timestamps = false;
}
