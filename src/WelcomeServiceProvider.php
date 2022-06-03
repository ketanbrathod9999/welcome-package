<?php

namespace KBR\Welcome;
use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider{

    public function boot() {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'welcome');
    }

    public function register() {
        
    }
}