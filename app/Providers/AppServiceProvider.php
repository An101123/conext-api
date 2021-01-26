<?php

namespace App\Providers;

use App\Repositories\BusinessTypeRepository;
use App\Repositories\BusinessTypeRepositoryInterface;
use App\Services\BusinessTypeService;
use App\Services\BusinessTypeServiceInterface;
use App\Repositories\ExpertiseRepository;
use App\Repositories\ExpertiseRepositoryInterface;
use App\Services\ExpertiseService;
use App\Services\ExpertiseServiceInterface;
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
        //
        $this->app->bind(BusinessTypeRepositoryInterface::class, BusinessTypeRepository::class);
        $this->app->bind(BusinessTypeServiceInterface::class, BusinessTypeService::class);
        $this->app->bind(ExpertiseRepositoryInterface::class, ExpertiseRepository::class);
        $this->app->bind(ExpertiseServiceInterface::class, ExpertiseService::class);
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
