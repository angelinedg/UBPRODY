<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class operatorstats extends Controller{
     public function index(){
  return response()->json([
            'error' => false,
            'operatorstats'  => DB::table('operatorstats')
            ->join('platforms','platforms.id', '=', 'operatorstats.alias_id')
            ->select('platforms.platformname','operatorstats.alias_id')
            ->groupBy('platforms.platformname','operatorstats.alias_id')
            ->get(),
           ], 200);
}
	  }