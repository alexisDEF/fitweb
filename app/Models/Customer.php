<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends ApiModel
{
    protected $fillable = [
        'id',
        'email',
        'firstname',
        'lastname',
        'programs',
        'created_at',
    ];

    public static function all($columns = array())
    {
        return self::map(self::get('users'));
    }

    public static function find($id)
    {
        $response = self::get('user/'.$id);
        $customer =  self::map($response)->first();
        return $customer;
    }

    public static function storeProgram ($params, $id)
    {
        self::post('createProgram/'.$id, $params);
    }

}
