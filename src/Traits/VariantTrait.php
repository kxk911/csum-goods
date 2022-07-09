<?php
namespace Kxk911\CsumGoods\Traits;

use Kxk911\CsumGoods\CsumAtributes;
use Kxk911\CsumGoods\Models\Atribute;
use Kxk911\CsumGoods\Models\VariantAtribute;

trait VariantTrait{
    public function setAtributes(array $atributes = [])
    {
        foreach($atributes as $key=>$value){
            $exists = Atribute::find($key);

            if(!$exists){
                $exists = CsumAtributes::add($key);
            }

            $va = VariantAtribute::where('variant_id', $this->id)->where('atribute_id', $exists->id)->firstOrNew();
            $va->variant_id = $this->id;
            $va->atribute_id = $exists->id;
            $va->value = $value;
            $va->save();
        }
    }
}