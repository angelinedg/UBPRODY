<?php

namespace App\Http\Controllers\CustomReports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomReportsController extends Controller
{
    public function index()
    {
    	return view('CustomReports/AttendanceReport');
    }
}
