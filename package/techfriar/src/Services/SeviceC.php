<?php

namespace Techfriar\Itemlist\Services;

use Techfriar\Itemlist\Models\Item;

class ServiceC
{
    public function rule() {
        $items = Item::where('price','<',250)->get();
        return $items;
    }
}