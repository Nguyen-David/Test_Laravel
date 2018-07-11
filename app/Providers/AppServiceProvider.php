<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        Blade::directive('myDir', function($var){
//            return "<h1>New Directive - $var</h1>";
//        });

        Response::macro('myRes', function ($value){

            return Response::make($value);
        });

        DB::listen(function ($query){

            dump($query->sql);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
