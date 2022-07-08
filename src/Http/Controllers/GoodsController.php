<?php

namespace kxk911\csum\goods\Console\Commands;

use App\Models\Goods;
use Yuraplohov\LaravelExample\Models\Item;

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