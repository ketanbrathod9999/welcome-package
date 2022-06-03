<?php

namespace KBR\Welcome;
use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider{

    public function boot() {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'welcome');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/welcome'),
        ]);
    }

    public function register() {
        
    }
}