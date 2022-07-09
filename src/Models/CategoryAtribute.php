<?php

namespace Kxk911\CsumGoods\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAtribute extends Model
{
    protected $fillable = [
        'atribute_id',
        'category_id'
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function atributes(){
        return $this->hasMany(Atribute::class, 'id', 'atribute_id');
    }
}