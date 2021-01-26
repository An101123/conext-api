<?php

namespace App\Providers;

use App\Repositories\LocalConextRepository;
use App\Repositories\LocalConextRepositoryInterface;
use App\Services\LocalConextService;
use App\Services\LocalConextServiceInterface;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LocalConextRepositoryInterface::class, LocalConextRepository::class);
        $this->app->bind(LocalConextServiceInterface::class, LocalConextService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
