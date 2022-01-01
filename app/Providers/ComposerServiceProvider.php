<?php

namespace App\Providers;

use App\Models\SiteOptions;
use App\ViewComposers\NavigationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer('front.master.menu', NavigationComposer::class);

        View::composer('front.partials.footer', function($view) {
            $view->with('copyright', SiteOptions::select('content')->where('name', 'copyright')->get()->first()->content);
        });

        View::composer('front.partials.logo', function($view) {
            $view->with( 'logoImage', SiteOptions::select('image_url')->where('name', 'site_logo')->get()->first());
        });

        View::composer('front.partials.main_image', function($view) {
            $view->with( 'mainImage', SiteOptions::select('image_url')->where('name', 'main_image')->get()->first());
        });
    }
}
