<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'is_active'
    ];

    public function Goods(){
        return $this->hasMany(Good::class, 'brand_id', 'id');
    }
}