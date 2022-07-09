<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;
use Kxk911\CsumGoods\Traits\VariantTrait;

class VariantAtribute extends Model
{

    protected $fillable = [
        'variant_id',
        'atribute_id',
        'value'
    ];

    public function variant(){
        return $this->hasOne(Variants::class, 'id', 'variant_id');
    }

    public function atribute(){
        return $this->hasOne(Atribute::class, 'id', 'atribute_id');
    }
}
