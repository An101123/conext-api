<?php

namespace App\Providers;

use App\Repositories\BusinessTypeRepository;
use App\Repositories\BusinessTypeRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;
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
use App\Repositories\HotNeedRepository;
use App\Repositories\HotNeedRepositoryInterface;
use App\Services\ExploreService;
use App\Services\ExploreServiceInterface;
use App\Repositories\LocalConextRepository;
use App\Repositories\LocalConextRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\VoucherRepository;
use App\Repositories\VoucherRepositoryInterface;
use App\Repositories\WorkPlaceRepository;
use App\Repositories\WorkPlaceRepositoryInterface;
use App\Services\CategoryService;
use App\Services\CategoryServiceInterface;
use App\Services\ContactService;
use App\Services\ContactServiceInterface;
use App\Services\EventService;
use App\Services\EventServiceInterface;
use App\Services\HotNeedService;
use App\Services\HotNeedServiceInterface;
use App\Services\LocalConextService;
use App\Services\LocalConextServiceInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Services\VoucherService;
use App\Services\VoucherServiceInterface;
use App\Services\WorkPlaceService;
use App\Services\WorkPlaceServiceInterface;
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
        $this->app->bind(VoucherServiceInterface::class, VoucherService::class);
        $this->app->bind(VoucherRepositoryInterface::class, VoucherRepository::class);
        $this->app->bind(WorkPlaceServiceInterface::class, WorkPlaceService::class);
        $this->app->bind(WorkPlaceRepositoryInterface::class, WorkPlaceRepository::class);
        $this->app->bind(ContactServiceInterface::class, ContactService::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(HotNeedServiceInterface::class, HotNeedService::class);
        $this->app->bind(HotNeedRepositoryInterface::class, HotNeedRepository::class);
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
