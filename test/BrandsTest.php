<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\CsumBrands;
use Kxk911\CsumGoods\Models\Brand;
use Kxk911\CsumGoods\Models\Good;

class BrandsTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_test_brands()
    {
        if($brand = CsumBrands::add('Brand 1')){
            $this->assertModelExists($brand);
        }

        if($brand = CsumBrands::add('Brand 2')){
            $this->assertModelExists($brand);
        }

        if($brand = CsumBrands::edit(1, "Brand 11", 1)){
            $this->assertModelExists($brand);
        }

        if($brand = CsumBrands::edit(1, "Brand 11", 1)){
            $this->assertModelExists($brand);
        }

        if($brand = CsumBrands::edit(1, "Brand 12")){
            $this->assertModelExists($brand);
        }

        if($brand = CsumBrands::edit(2, "Brand 22")){
            $this->assertModelExists($brand);
        }

        $this->assertNotNull(
            CsumBrands::list()
        );

        CsumBrands::delete(1);
        $brand = CsumBrands::get(1);
        $this->assertNull($brand);

        $this->assertModelExists(CsumBrands::get(2));


    }
}