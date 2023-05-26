<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    
    
    public function boot(){
       Paginator::useBootstrap(); 
       \URL::forceScheme('https');
       $this->app['request']->server->set('HTTPS','on');
       // Paginator::useBootstrapFive();
        //または Paginator::useBootstrapFour();　
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
}
