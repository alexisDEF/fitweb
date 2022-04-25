<?php

namespace App\Http\Controllers;

use App\Models\DefaultExercise;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program.index',['programs'=>Program::all()]);
    }

    public static function show($id)
    {
        return view('program.show',['program'=>Program::getProgramById($id)]);
    }

    public static function todelete($id)
    {
        return view('program.delete',['program'=>Program::getProgramById($id)]);
    }

    public static function delete($id)
    {

        Program::deleteProgram($id);
        return redirect()->route('program.index');
    }

    public function defaultExercises($programId)
    {
        return view('program.addExercise',['defaultExercises'=>DefaultExercise::all(), 'programId'=>$programId]);
    }

    public function addExerciseProgram($programId, $defaultExerciseId)
    {
        Program::updateProgram($programId, $defaultExerciseId);
        return $this->show($programId);
    }
}
