<?php

namespace Kxk911\CsumGoods\Console\Commands;

use Kxk911\CsumGoods\Models\Goods;

class GoodsController
{
    public function good()
    {
        $items = Goods::select(['name'])->get();

        return response()->json([
            'items' => $items,
        ]);
    }
}