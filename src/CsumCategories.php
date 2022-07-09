<?php

namespace Kxk911\CsumGoods;

use Illuminate\Support\Collection;
use Kxk911\CsumGoods\Models\Category;
use Kxk911\CsumGoods\Models\CategoryAtribute;

class CsumCategories {

    public static function get(int $category_id): Category|null
    {
        return Category::where('id', $category_id)->with('atributes')->first();
    }

    public static function add(string $name, int $parent = 0, bool $is_active = true): Category
    {
        $brand = new Category();
        $brand->name = $name;
        $brand->parent = $parent;
        $brand->is_active = $is_active;
        $brand->save();
        return $brand;
    }

    public static function edit(int $category_id, string $name, int $parent = 0, bool $is_active = true): Category
    {
        $cat = Category::find($category_id);
        $cat->name = $name;
        if(is_numeric($parent) && $parent >= 0){
            $cat->parent = $parent;
        }
        
        if(is_bool($is_active)){
            $cat->is_active = $is_active;
        }
        
        $cat->save();
        return $cat;
    }

    public static function delete(int $category_id): void
    {
        Category::find($category_id)->delete();
    }

    public static function list(int $parent = 0): Collection
    {
        if(is_numeric($parent) && $parent > 0){
            return Category::where('parent', $parent)->get();
        }
        return Category::get();
    }

    public static function bindAtribute($category_id, int $atribute_id): CategoryAtribute
    {
        $row = CategoryAtribute::where('category_id', $category_id)
            ->where('atribute_id', $atribute_id)
            ->first();

        if(isset($row) && $row->exists){
            return $row;
        }

        $ca = new CategoryAtribute();
        $ca->category_id = $category_id;
        $ca->atribute_id = $atribute_id;
        $ca->save();

        return $ca->with(['category', 'atributes'])->first();
    }

    public static function unbindAtribute($category_id, int $atribute_id): void 
    {
        $row = CategoryAtribute::where('category_id', $category_id)
            ->where('atribute_id', $atribute_id)
            ->first();

        if(!$row->exists()){
            return;
        }

        $row->delete();
    }
}