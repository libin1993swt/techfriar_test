<?php

namespace Techfriar\Itemlist;
use Illuminate\Support\ServiceProvider;

class ItemFilterServiceProvider extends ServiceProvider 
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }

    public function register() {

    }
}