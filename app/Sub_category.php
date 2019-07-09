<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_category extends Model
{
    use SoftDeletes;
    protected $fillable =
        [
            'title',
        ];
    protected $dates=['deleted_at'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
