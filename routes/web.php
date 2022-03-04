<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
    [MainController::class, 'getIndex']
)->name('home');

Route::get('about',
    [MainController::class, 'getAbout']
)->name('about');

Route::get('projects',
    [MainController::class, 'getProjects']
)->name('projects');

Route::get('project/{projectAlias}',
    [MainController::class, 'getProject']
)->name('projectItem');

Route::get('news/{alias}',
    [MainController::class, 'getNewsItem']
)->name('newsItem');

Route::get('contact',
    [MainController::class, 'getContact']
)->name('contact');

Route::post('feedback',
    [MainController::class, 'sendEmail']
)->name('sendEmail');

