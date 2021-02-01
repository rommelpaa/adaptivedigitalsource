<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

//MODElS
use App\Models\NewsLetter;

//Services
use App\Services\NewsLetterService;

//Repository
use App\Repositories\Repository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Services\NewsLetterService', function () {
            return new NewsLetterService(new Repository(new NewsLetter));
        });
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
