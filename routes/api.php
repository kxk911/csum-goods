<?php

use Illuminate\Support\Facades\Route;
use Yuraplohov\LaravelExample\Http\Controllers\ItemsController;

Route::get('good', [GoodsController::class, 'good']);