<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
    		'brand_id',
        'category_id','sub_category_id',
    		'title',
    		'picture1',
    		'picture2',
    		'price',
    		'quantity','popularity_count'

    ];
    
    protected $dates=['deleted_at'];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sub_category()
    {
        return $this->belongsTo(Sub_category::class);
    }
    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
