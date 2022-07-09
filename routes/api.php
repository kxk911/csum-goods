<?php

use Illuminate\Support\Facades\Route;
use Kxk911\CsumGoods\Http\Controllers\GoodsController;

Route::get('goods', [GoodsController::class, 'goods']);