<?php

namespace Kxk911\CsumGoods\Test;

use Kxk911\CsumGoods\GoodsService;
use PHPUnit\Framework\TestCase;


class GoodsService1est extends TestCase
{
    /**
     * @test
     */
    public function it_gets_some_result()
    {
        $sut = new GoodsService;
        $this->assertEquals('bar', $sut->getSomeResult());
    }
}