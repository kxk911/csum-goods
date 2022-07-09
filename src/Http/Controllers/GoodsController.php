<?php

namespace Kxk911\CsumGoods\Http\Controllers;

use Kxk911\CsumGoods\Models\Good;

class GoodsController
{
    public function goods()
    {
        $items = Good::select(['name'])->get();

        return response()->json([
            'items' => $items,
        ]);
    }
}