<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Brand extends Model implements Authenticatable
{   
    use AuthenticableTrait;
    protected $table = 'tbl_brand';
}
