<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\Models\Good;

class GoodsTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_gets_all_items()
    {
       $good = new Good();
       $good->addNew(
            $name = "test",
            $brand = "lenovo"
       );
       
       
       $good->addVariant("testVar", "test", 0,0);

       dd($good->variants[0]->setAtributes(
        [
            "Процессоо" => "i3"
        ]
       ));
       
    }
}