<?php

namespace App\Http\Controllers\Teams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
   	public function index()
    {
    	return view('Teams/TeamPerformance');
    }
}
