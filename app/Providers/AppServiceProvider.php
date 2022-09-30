<?php

namespace App\Providers;

use App\Models\Rubric;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function ($query){
//            dump($query->sql);
//            Log::info($query->sql);
            Log::channel('sqllogs')->info($query->sql);
        });

        view()->composer('layouts.footer', function($view){
            $view->with('rubrics', Rubric::all());
        });

        Paginator::useBootstrap();
    }
}
