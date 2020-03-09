<?php

namespace App\Http\Controllers\API;
use App\Operator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OperatorController extends Controller
{
public function index()
    {
  return response()->json([
            'error' => false,
            'operators'  => Operator::all(),
        ], 200);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'operatorcode' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:operator,email',
            'contactno' => 'required',
            'address' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'error' => true,
                'messages'  => $validation->errors(),
            ], 200);
        }
        else
        {
            $operator = new Operator;
            $operator->operatorcode = $request->input('operatorcode');
            $operator->firstname = $request->input('firstname');
            $operator->lastname = $request->input('lastname');
            $operator->email = $request->input('email');
            $operator->contactno = $request->input('contactno');
            $operator->address = $request->input('address');
            $operator->save();
    
            return response()->json([
                'error' => false,
                'operator'  => $operator,
            ], 200);
        }
    }

    public function show($id)
    {
        $operator = Operator::find($id);

        if(is_null($operator)){
            return response()->json([
                'error' => true,
                'message'  => "Record with id # $id not found",
            ], 404);
        }

        return response()->json([
            'error' => false,
            'operator'  => $operator,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(),[ 
            'operatorcode' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:operator,email',
            'contactno' => 'required',
            'address' => 'required',
        ]);

        if($validation->fails()){
            return response()->json([
                'error' => true,
                'messages'  => $validation->errors(),
            ], 200);
        }
        else
        {
            $operator = Operator::find($id);
             $operator->operatorcode = $request->input('operatorcode');
            $operator->firstname = $request->input('firstname');
            $operator->lastname = $request->input('lastname');
            $operator->email = $request->input('email');
            $operator->contactno = $request->input('contactno');
            $operator->address = $request->input('address');
            $operator->save();
    
            return response()->json([
                'error' => false,
                'operator'  => $operator,
            ], 200);
        }
    }

    public function destroy($id)
    {
        $operator = Operator::find($id);

        if(is_null($operator)){
            return response()->json([
                'error' => true,
                'message'  => "Record with id # $id not found",
            ], 404);
        }

        $operator->delete();
    
        return response()->json([
            'error' => false,
            'message'  => "Employee record successfully deleted id # $id",
        ], 200);
    }
}