<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationComposer;
use App\Models\SiteOptions;
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
            $view->with(['copyright' => SiteOptions::where('name', 'copyright')->get()->first()]);
        });

    }
}
