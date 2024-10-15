<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DeliveryPersonnelRepository;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
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
