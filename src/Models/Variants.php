<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;
use Kxk911\CsumGoods\Traits\VariantTrait;

class Variants extends Model
{
    use VariantTrait;

    protected $fillable = [
        'name',
        'slug',
        'brand_id',
        'visible'
    ];

    public function good(){
        return $this->hasOne(Good::class, 'id', 'good_id');
    }
}
