<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AliasDump extends Model
{
    protected $table = 'alias';

    protected $fillable = [
    	'id',
    	'alias',
    	'platformid',
    	'operatorid',
    	'password',
    	'status',
    	'assignedby',
    	'reassigned',
    	'datecreated'
    ];

    
    protected $attributes = [
    	'alias' => null,
    	'platformid' => null,
    	'operatorid' => null,
    	'password' => null,
    	'status' => null,
    	'assignedby' => null,
    	'reassigned' => null,
    	'datecreated' => null
    ];

}
