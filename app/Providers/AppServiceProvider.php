<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Techfriar\Itemlist\Services\ItemInterface;
use Techfriar\Itemlist\Services\ServiceA;
use Techfriar\Itemlist\Services\ServiceB;
use Techfriar\Itemlist\Services\ServiceC;
use Techfriar\Itemlist\Services\ServiceA as ServicesServiceA;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ItemInterface::class, ServiceA::class);
        $this->app->bind(ItemInterface::class, ServiceB::class);
        $this->app->bind(ItemInterface::class, ServiceC::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
