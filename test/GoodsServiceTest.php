<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\Goods;
use PHPUnit\Framework\TestCase;


class GoodsService1est extends TestCase
{
    /**
     * @test
     */
    public function it_gets_some_result()
    {
        $sut = new Goods;
        $this->assertEquals('bar', $sut->getSomeResult());
    }
}