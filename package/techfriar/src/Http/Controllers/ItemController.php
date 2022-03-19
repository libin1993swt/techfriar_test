<?php

namespace Techfriar\Itemlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Techfriar\Itemlist\Services\ServiceA;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index(ServiceA $serviceA){
        $data = $serviceA->rule();
        dd($data);
    }
}
