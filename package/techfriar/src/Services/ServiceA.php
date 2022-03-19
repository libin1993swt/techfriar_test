<?php

namespace Techfriar\Itemlist\Services;

use Techfriar\Itemlist\Models\Item;

class ServiceA
{
    public function rule() {
        $items = Item::where('length','>',50)->get();
        return $items;
    }
}