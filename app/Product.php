<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //
    protected $table = 'products';
    
    static function validation()
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
        ];
        return $rules;
    }
}
