<?php

namespace App\Http\Controllers\Platforms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index()
    {
    	return view('Platforms/Platforms');
    }
}
