<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Order extends Model implements Authenticatable
{   
    use AuthenticableTrait;
    protected $table = 'tbl_order';
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class,'category');
    }
    public function brand()
    {
        return $this->hasOne(Brand::class,'brand');
    }
    public function offerType()
    {
        return $this->belongsTo(OfferType::class,'type', 'id');
    }
    public function product()
    {
        return $this->hasOne(Product::class,'product');
    }
}
