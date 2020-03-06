<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
    	return view('Statistics/Platforms');
    }

    public function index1()
    {
    	return view('Statistics/Operators');
    }

    public function index2()
    {
    	return view('Statistics/Teams');
    }

    public function index3()
    {
    	return view('Statistics/Payouts');
    }
}
