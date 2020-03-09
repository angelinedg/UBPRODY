<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable =
    [
    	'operatorcode',
    	'firstname',
    	'lastname',
    	'email',
    	'contactno',
    	'address'
    ];

    protected $table = 'operator';
}
