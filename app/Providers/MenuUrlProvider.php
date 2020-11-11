<?php

namespace App\Providers;

use App\Model\Generique\Url\MenuUrl;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuUrlProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(['myhouse.back.menu.particulier.annonce', 'myhouse.back.menu.particulier.interesse', 'myhouse.back.menu.particulier.agenda'], function ($view) {
            $view->with('url', MenuUrl::all()->last()->url);
        });
    }
}
