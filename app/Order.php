<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
