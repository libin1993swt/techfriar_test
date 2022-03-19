<?php

namespace Techfriar\Itemlist\Services;

use Techfriar\Itemlist\Models\Item;

class ServiceB
{
    public function rule() {
        $items = Item::where('color','!=','Red')->get();
        return $items;
    }
}