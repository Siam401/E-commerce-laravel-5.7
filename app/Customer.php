<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =
        [
            'user_name','email','password','customer_no'
        ];
}
