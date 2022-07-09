<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\CsumAtributes;
use Kxk911\CsumGoods\CsumCategories;


class CategoriesTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_test_categories()
    {
        if($cat = CsumCategories::add(
            $name = "Category 1",
            $parent = 0,
            $is_active = true )){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::add('Category 2', 1)){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::add('Category 3')){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::add(
            $name = 'Category 3',
            $is_active = false)){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::edit(1, "Category 11", 0, true)){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::edit(1, "Category 11", 1)){
            $this->assertModelExists($cat);
        }

        if($cat = CsumCategories::edit(1, "Category 11")){
            $this->assertModelExists($cat);
        }

        $this->assertNotNull(
            CsumCategories::list()
        );

        $this->assertNotNull(
            CsumCategories::list(1)
        );

        CsumCategories::delete(1);


        $cat = CsumCategories::get(2);

        

        $atr = CsumAtributes::add("test");
        CsumCategories::bindAtribute($cat->id, $atr->id);
        $cat = CsumCategories::get(2);

        $this->assertNotNull($cat);

        $this->assertModelExists(CsumCategories::get(2));

        

    }
}