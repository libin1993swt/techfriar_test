<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Techfriar\Itemlist\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        // code to seed
        Item::create([
            'name' => 'Item A',
            'price' => 240,
            'color' => 'Red',
            'length' => 100
        ]);

        Item::create([
            'name' => 'Item B',
            'price' => 150,
            'color' => 'Green',
            'length' => 200
        ]);

        Item::create([
            'name' => 'Item C',
            'price' => 260,
            'color' => 'Blue',
            'length' => 300
        ]);

        Item::create([
            'name' => 'Item D',
            'price' => 200,
            'color' => 'Red',
            'length' => 100
        ]);

        Item::create([
            'name' => 'Item E',
            'price' => 200,
            'color' => 'Green',
            'length' => 100
        ]);
    }
}