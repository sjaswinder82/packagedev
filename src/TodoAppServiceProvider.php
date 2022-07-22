<?php

namespace Demoapp\Todoapp;

use Illuminate\Support\ServiceProvider;

class TodoAppServiceProvider extends ServiceProvider 
{
    public function register() {

    }

    public function boot() {
        // add route from your packages
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'todoapp');
    }
}