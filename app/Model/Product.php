<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_product';
    protected $guarded = [];
    public function offerList($datalist)
    {
        $data = \App\Model\Offer::whereIn('id',$datalist)->get();
        return $datalist;
    }
    public function getOffer()
    {
        return $this->belongsTo(Offer::class,'offer', 'id');
    }
    public function getCategory()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
    public function getBrand()
    {
        return $this->belongsTo(Brand::class,'brand', 'id');
    }
    
}
