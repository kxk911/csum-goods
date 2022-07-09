<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;
use Kxk911\CsumGoods\Traits\GoodTrait;

class Good extends Model
{
    use GoodTrait;

    protected $fillable = [
        'name',
        'slug',
        'brand_id',
        'visible'
    ];

    public function variants(){
        return $this->hasMany(Variants::class, 'good_id', 'id');
    }
}