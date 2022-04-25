<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DefaultExercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DefaultExerciseController extends Controller
{
    public function index()
    {
        return view('defaultExercise.index',['defaultExercises'=> DefaultExercise::all()]);
    }

    public function show($id)
    {
        return view('defaultExercise.show',['defaultExercise'=> DefaultExercise::find($id)]);
    }


    public function edit($id)
    {
        return view('defaultExercise.edit',['defaultExercise'=> DefaultExercise::find($id)]);
    }

    public function create()
    {
            return view('defaultExercise.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'description'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],401);
        }

        $input = [
            'title' => $request->input('title'),
            'duration'=> $request->input('duration'),
            'description'=> $request->input('description'),
            'weight'=> $request->input('weight'),
            'serie'=> $request->input('serie'),
            'repetition'=> $request->input('repetition'),
            'restDuration'=> $request->input('restDuration'),
            'type'=> $request->input('type'),
        ];

        DefaultExercise::postDefaultExercise($input);
        return redirect()->route('defaultExercise.index');
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['error'=>$validator->errors()],401);
        }

        $input = [
            'title' => $request->input('title'),
            'duration'=> $request->input('duration'),
            'description'=> $request->input('description'),
            'weight'=> $request->input('weight'),
            'serie'=> $request->input('serie'),
            'repetition'=> $request->input('repetition'),
            'restDuration'=> $request->input('restDuration'),
            'type'=> $request->input('type'),
        ];

        DefaultExercise::updateExercise($input, $id);
        return self::show($id);
    }

    public function delete($id)
    {
        DefaultExercise::deleteDefaultExercise($id);
        return redirect()->route('defaultExercise.index');
    }


}
