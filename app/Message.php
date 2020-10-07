<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public static function rules()
    {
        return [
                    'name.required'=>'A name is required',
                    'phone.required'=>'A subject is required',
                    'content.required'=>'A content is required',
              ];
    }
}
