<?php

namespace App\Http\Controllers\DataManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataManagementController extends Controller
{
	public function index()
    {
    	return view('DataManagement/UploadLogs');
    }
}
