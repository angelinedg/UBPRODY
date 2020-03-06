<?php

namespace App\Http\Controllers\API;
use Carbon\Carbon;
use App\Platform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PlatformController extends Controller
{
 public function index()
    {
  return response()->json([
            'error' => false,
            'platforms'  => Platform::all(),
        ], 200);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'platformname' => 'required',
            'platformcode' => 'required',
            'platformtype' => 'required',
            'rate' => 'required',
            'description' => 'required',
            'timezone' => 'required',
            'status' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'error' => true,
                'messages'  => $validation->errors(),
            ], 200);
        }
        else
        {
            $platform = new Platform;
            $platform->platformname = $request->input('platformname');
            $platform->platformtype = $request->input('platformtype');
            $platform->platformcode = $request->input('platformcode');
            $platform->rate = $request->input('rate');
            $platform->description = $request->input('description');
            $platform->timezone = $request->input('timezone');
            $platform->status = $request->input('status');
            $platform->save();
    
            return response()->json([
                'error' => false,
                'platform'  => $platform,
            ], 200);
        }
    }

    public function show($id)
    {
        $platform = Platform::find($id);

        if(is_null($platform)){
            return response()->json([
                'error' => true,
                'message'  => "Record with id # $id not found",
            ], 404);
        }

        return response()->json([
            'error' => false,
            'platform'  => $platform,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(),[ 
            'platformname' => 'required',
            'platformcode' => 'required',
            'platformtype' => 'required',
            'rate' => 'required',
            'description' => 'required',
            'timezone' => 'required',
            'status' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'error' => true,
                'messages'  => $validation->errors(),
            ], 200);
        }
        else
        {
            $platform = Platform::find($id);
            $platform->platformname = $request->input('platformname');
            $platform->platformtype = $request->input('platformtype');
            $platform->platformcode = $request->input('platformcode');
            $platform->rate = $request->input('rate');
            $platform->description = $request->input('description');
            $platform->timezone = $request->input('timezone');
            $platform->status = $request->input('status');
            $platform->save();
    
            return response()->json([
                'error' => false,
                'platform'  => $platform,
            ], 200);
        }
    }

    public function destroy($id)
    {
        $platform = Platform::find($id);

        if(is_null($platform)){
            return response()->json([
                'error' => true,
                'message'  => "Record with id # $id not found",
            ], 404);
        }

        $platform->delete();
    
        return response()->json([
            'error' => false,
            'message'  => "Employee record successfully deleted id # $id",
        ], 200);
    }
}