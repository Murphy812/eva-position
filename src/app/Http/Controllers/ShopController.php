<?php

namespace App\Http\Controllers;

use App\Shop;

class ShopController extends Controller
{
    use Traits\CrudTrait;
    
    const MODEL = Shop::class;
}