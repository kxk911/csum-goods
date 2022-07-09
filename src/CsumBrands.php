<?php

namespace Kxk911\CsumGoods;

use Illuminate\Support\Collection;
use Kxk911\CsumGoods\Models\Brand;

class CsumBrands {

    public static function get(int $brand_id): Brand|null
    {
        return Brand::find($brand_id);
    }

    public static function find(string $name): Brand|null
    {
        return Brand::where('name', $name)->first();
    }

    public static function add(string $name, bool $is_active = true): Brand
    {
        $brand = new Brand;
        $brand->name = $name;
        $brand->is_active = $is_active;
        $brand->save();
        return $brand;
    }

    public static function edit(int $brand_id, string $name, bool $is_active = true): Brand
    {
        $brand = Brand::find($brand_id);
        $brand->name = $name;
        $brand->is_active = $is_active;
        $brand->save();
        return $brand;
    }

    public static function delete(int $brand_id): void
    {
        Brand::find($brand_id)->delete();
    }

    public static function list(): Collection
    {
        return Brand::get();
    }
}