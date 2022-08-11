<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class OfferType extends Model implements Authenticatable
{   
    use AuthenticableTrait;
    protected $table = 'tbl_offer_type';
    // public function offer()
    // {
    //     return $this->hasMany(Offer::class,'id');
    // }
}
