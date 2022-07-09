<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;

class Atribute extends Model
{
    protected $fillable = [
        'name',
        'is_active'
    ];

    public function CategoryAtribute(){
        return $this->belongsTo(CategoryAtribute::class, 'atribute_id', 'id');
    }
}