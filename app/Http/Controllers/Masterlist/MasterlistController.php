<?php

namespace App\Http\Controllers\Masterlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterlistController extends Controller
{
    public function index()
    {
    	return view('Masterlist/OperatorList');
    }
}
