<?php

namespace smnbst\pmm;

use Illuminate\Support\ServiceProvider;

class pmmServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
          
          /*
          if(!$this->app->routesAreCached()){
            require __DIR__.'/routes.php';
         
         }

         $this->loadViewsFrom(base_path('resources/views'),'pmm01');
         $this->publishes([ __DIR__.'views' => base_path('resources/views') ]);
         $this->publishes([ __DIR__.'/migrations' => database_path('migrations')],'migrations');
         */
         

        $this->loadViewsFrom(__DIR__.'/views', 'pmm');
        $this->publishes([__DIR__.'/views' => base_path('resources/views/smnbst/pmm'),]);
        $this->publishes([__DIR__.'/migrations' => database_path('migrations')],'migrations');
        $this->publishes([__DIR__.'/controllers' => base_path('app/Http/Controllers/smnbst/pmm'),]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {


          include __DIR__.'/routes.php';         
         $this->app->make('smnbst\pmm\PmmController');

       
    }
}