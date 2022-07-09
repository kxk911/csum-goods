<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent',
        'is_active'
    ];

    public function atributes(){
        return $this->hasManyThrough(Atribute::class, CategoryAtribute::class, 'category_id', 'id', 'id', 'atribute_id');
    }

    public function Goods(){
        // return $this->has
    }
}