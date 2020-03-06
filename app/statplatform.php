<?php

namespace App\Models;
 use Eloquent;

class statplatform extends Eloquent{

    protected $table = 'operatorstats';

    public function plat()
    {
        return $this->belongsTo('App\platforms');
    }

    public function operstats()
    {
        return $this->belongsTo('App\Models\operatorstats');
    }

}