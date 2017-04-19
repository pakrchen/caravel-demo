<?php

use Caravel\Console\App;
use Caravel\Routing\ClassLoader;
use Caravel\Config\Config;

/*
|--------------------------------------------------------------------------
| Register The Class Loader
|--------------------------------------------------------------------------
|
| You may use the class loader to load your controllers and models.
| This is useful for keeping all of your classes in the "global" namespace.
|
*/

ClassLoader::addPaths(array(

    App::getAppRoot() . "/controllers",
    App::getAppRoot() . "/models",

))->register();

/*
|--------------------------------------------------------------------------
| Class Aliases
|--------------------------------------------------------------------------
|
| This array of class aliases will be registered when this application
| is started. However, feel free to register as many as you wish as
| the aliases are "lazy" loaded so they don't hinder performance.
|
*/

App::alias(Config::get("app")->aliases);

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application.
| By default we will build a basic log file setup which creates a single
| file for logs.
|
*/

Log::useFile("/tmp/caravel.log");

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors.
|
*/

App::error(function(Exception $e, App $app) {

});

/*
|--------------------------------------------------------------------------
| Application Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function() {

});

App::after(function($response) {

});

App::homepage("/Demo/index");
