<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index',['customers'=>Customer::all()]);
    }

    public function show($id)
    {
        return view('customer.show',['customer'=>Customer::find($id)]);
    }

    public function storeCustomerProgram(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],401);
        }

        $input =  $request->all();

        Customer::storeProgram($input, $id);
        return self::show($id);
    }
}
