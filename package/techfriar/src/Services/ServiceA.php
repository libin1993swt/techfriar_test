<?php

namespace Techfriar\Itemlist\Services;

use Techfriar\Itemlist\Models\Item;

class ServiceA implements ItemInterface
{
    public function rule() {
        $items = Item::where('length','>',50)->get();
        return $items;
    }
}