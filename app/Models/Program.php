<?php

namespace App\Models;

use Facade\FlareClient\Api;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class Program extends ApiModel
{
    protected $fillable = ['id','name','user_id','default_exercises','user','created_at'];

    public function exercises()
    {
        return $this->hasMany(DefaultExercise::class);
    }

    public static function all($columns = array())
    {
        return self::map(self::get('programs'));
    }

    public static function getProgramById($id)
    {
        $response = self::get('program/'.$id);
        $program = self::map($response)->first();
        /**$program->exercises = self::map($response->exercises);
        foreach($program->exercises as $defaultExercise)
        {

        }*/
        return $program;
    }

    public static function deleteProgram($id)
    {
        self::get('program/delete/'.$id);
    }

    public static function updateProgram($programId, $defaultExerciseId)
    {
        self::get('program/addExercise/'.$programId.'/'.$defaultExerciseId);
    }

}
