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
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // if($this->app->runningInConsole()) {
        //     if(!class_exists('CreateTableTodos')) {
        //         $this->publishes([
        //            __DIR__.'/../database/migrations/2022_07_22_054422_create_table_todos.php' => 
        //             database_path('migrations/'. date('Y_m_d_His',time()). 'create_table_todos.php'),
        //         ],'migrations');
        //     }
        // }
    }
}