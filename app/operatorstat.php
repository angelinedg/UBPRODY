<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class operatorstat extends Model
{

     protected $fillable = [
  		   'id', 
        'alias_id', 
        'platform_id',
        'stats',
        'report_data',
        'from_time',
        'to_time',
        'status'    
           ];
      }


