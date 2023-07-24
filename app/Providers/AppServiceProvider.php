<?php

namespace App\Providers;

use App\Models\Employees;
use App\Models\Projects;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Initialize global employees and projects object arrays
        //Can be used in all controllers and views

        view()->composer('*',function($view) {
            $view->with('employees', Employees::all());
            $view->with('projects', Projects::all());
        });
    }
}
