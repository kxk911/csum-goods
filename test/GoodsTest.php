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
        Good::forceCreate(['name' => 'Name 1']);
        Good::forceCreate(['name' => 'Name 2']);

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