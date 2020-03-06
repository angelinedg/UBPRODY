<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Platforms extends Model
{
    protected $table = 'platform';

    protected $fillable = [
    	'id',
    	'platformname',
    	'platformtype',
    	'platformcode',
    	'timezone',
    	'rate',
    	'description',
    	'status'
    ];
    
    protected $attributes = [
    	'platformname' => null,
    	'platformtype' => null,
    	'platformcode' => null,
    	'timezone' => null,
    	'rate' => 0.00,
    	'description' => null,
    	'status' => 1,
    ];


}
