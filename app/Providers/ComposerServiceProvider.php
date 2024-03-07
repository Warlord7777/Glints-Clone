<?php

namespace App\Providers;
 
use App\View\Composers\NavComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {

        Facades\View::composer('partials.navbarUser', NavComposer::class);
    }
}
