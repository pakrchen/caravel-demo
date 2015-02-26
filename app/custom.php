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

App::filter(function() {

});

App::homepage("/Demo/index");
