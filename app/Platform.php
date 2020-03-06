<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $fillable = 
    [
    	'platfromname',
    	'platformcode',
    	'platformtype',
    	'rate',
    	'description',
    	'timezone',
    	'status'
    ];
}
