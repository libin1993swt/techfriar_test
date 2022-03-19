<?php

namespace Techfriar\Itemlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Techfriar\Itemlist\Services\ServiceA;
use Illuminate\Http\Request;
use Techfriar\Itemlist\Services\ItemInterface;

class ItemController extends Controller
{
    //
    public function index(ItemInterface $itemInterface){
        $items = $itemInterface->rule();
        return response()->json([
            'items' => $items
        ]);
    }
}
