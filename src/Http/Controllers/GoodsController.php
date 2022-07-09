<?php

namespace kxk911\csum\goods\Console\Commands;

use kxk911\csum\goods\Models\Goods;

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