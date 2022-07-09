<?php
namespace Kxk911\CsumGoods\Traits;

use Exception;
use Illuminate\Support\Str;
use Kxk911\CsumGoods\CsumBrands;
use Kxk911\CsumGoods\Models\Good;
use Kxk911\CsumGoods\Models\Variants;

trait GoodTrait{
    
    public function addNew(string $name = null,  string $brand = null, string $slug = null, bool $visible = true)
    {
        if(empty($this->name) && empty($name)){
            throw new Exception('Error, name argument must by set');
        }

        if(empty($slug)){
            $slug = Str::slug($name);
        }

        $brandModel = CsumBrands::find($brand);
        if(empty($brandModel)){
            $brandModel = CsumBrands::add($name);
        }

        $this->name = $name;
        $this->brand_id = $brandModel->id;
        $this->slug = $slug;
        $this->visible = $visible;
        $this->save();
    }

    public function withVariants(){
        return Good::find($this->id)->with('variants')->first();
    }

    public function addVariant(string $name, string $description, float $price, float $old_price = 0, array $atributes = []): Variants
    {
        $variant = new Variants();
        $variant->name = $name;
        $variant->price = $price;
        $variant->old_price = $old_price;
        $variant->description = $description;
        $variant->good_id = $this->id;
        $variant->save();

        return $variant;
    }

    
}

