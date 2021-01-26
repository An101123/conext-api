<?php

namespace App\Providers;

use App\Repositories\ExpertiseRepository;
use App\Repositories\ExpertiseRepositoryInterface;
use App\Services\ExpertiseService;
use App\Services\ExpertiseServiceInterface;
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
        //
        $this->app->bind(ExpertiseRepositoryInterface::class, ExpertiseRepository::class);
        $this->app->bind(ExpertiseServiceInterface::class, ExpertiseService::class);
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
