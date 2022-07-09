<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\CsumAtributes;
use Kxk911\CsumGoods\CsumCategories;

class AtributesTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_test_atributes()
    {
        if($atr = CsumAtributes::add('Atribute 1')){
            $this->assertModelExists($atr);
        }

        if($atr = CsumAtributes::add('Atribute 2')){
            $this->assertModelExists($atr);
        }

        if($atr = CsumAtributes::add('Atribute 3')){
            $this->assertModelExists($atr);
        }

        if($atr = CsumAtributes::edit(1, "Atribute 11", 1)){
            $this->assertModelExists($atr);
        }

        if($atr = CsumAtributes::edit(1, "Atribute 22", 0)){
            $this->assertModelExists($atr);
        }

        $this->assertNotNull(
            CsumAtributes::list()
        );

        CsumAtributes::delete(1);
        $atr = CsumAtributes::get(1);
        $this->assertNull($atr);

        $this->assertModelExists(CsumAtributes::get(3));

    }
}