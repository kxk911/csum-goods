<?php

namespace kxk911\csum\goods\Test;

use kxk911\csum\goods\GoodsService;
use PHPUnit\Framework\TestCase;


class GoodsServiceTest extends TestCase
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