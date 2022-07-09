<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\Models\Goods;

class GoodsTest extends FeatureTestCase
{
    /**
     * @test
     */
    public function it_gets_all_items()
    {
        Goods::forceCreate(['name' => 'Name 1']);
        Goods::forceCreate(['name' => 'Name 2']);

        $response = $this->get('goods');

        $response->assertStatus(200);

        $response->assertExactJson([
            'items' => [
                ['name' => 'Name 1'],
                ['name' => 'Name 2'],
            ]
        ]);
    }
}