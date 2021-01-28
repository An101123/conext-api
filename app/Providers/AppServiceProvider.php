<?php

namespace App\Providers;

use App\Repositories\BusinessTypeRepository;
use App\Repositories\BusinessTypeRepositoryInterface;
use App\Repositories\EventRepository;
use App\Repositories\EventRepositoryInterface;
use App\Services\BusinessTypeService;
use App\Services\BusinessTypeServiceInterface;
use App\Repositories\ExpertiseRepository;
use App\Repositories\ExpertiseRepositoryInterface;
use App\Services\ExpertiseService;
use App\Services\ExpertiseServiceInterface;
use App\Repositories\ExploreRepository;
use App\Repositories\ExploreRepositoryInterface;
use App\Services\ExploreService;
use App\Services\ExploreServiceInterface;
use App\Repositories\LocalConextRepository;
use App\Repositories\LocalConextRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Services\EventService;
use App\Services\EventServiceInterface;
use App\Services\LocalConextService;
use App\Services\LocalConextServiceInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
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
        $this->app->bind(ExploreRepositoryInterface::class, ExploreRepository::class);
        $this->app->bind(ExploreServiceInterface::class, ExploreService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(EventServiceInterface::class, EventService::class);
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
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
