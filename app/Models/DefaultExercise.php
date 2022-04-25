<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultExercise extends ApiModel
{
    protected $fillable = ['id','title','duration','description','weight','repetition','serie','restDuration','type'];

    public static function all($columns = array())
    {
        return self::map(self::get('defaultExercises'));
    }

    public function find($id)
    {
        $response = self::get('defaultExercise/'.$id);
        $defaultExercise = self::map($response)->first();
        return $defaultExercise;
    }

    public static function postDefaultExercise($params)
    {
        return self::post('storeDefaultExercise',$params);
    }

    public static function updateExercise($params, $id)
    {
        self::put('updateDefaultExercise/'.$id, $params);
    }

    public function deleteDefaultExercise($id)
    {
        self::get('defaultExercise/delete/'.$id);
    }
}
