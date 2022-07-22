<?php

use Illuminate\Routing\Router;
use Illuminate\Http\Request;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as'         => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('articles', ArticleController::class);
    $router->resource('pages', PageController::class);
    $router->resource('page-contents', PageContentController::class);
    $router->resource('projects', ProjectController::class);
    $router->resource('project-images', ProjectImageController::class);
    $router->resource('site-options', SiteOptionsController::class);
    $router->resource('homepage', HomePageController::class);
    $router->resource('aboutpage', AboutPageController::class);
    $router->resource('contactpage', ContactPageController::class);
    $router->resource('projectspage', ProjectsPageController::class);
    $router->resource('vendors', VendorController::class);
});
