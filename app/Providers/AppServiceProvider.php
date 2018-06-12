<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\EmployeeInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\EmployeeInterface', function($app)
        {
            return new \App\EmployeeMock();
        });

        $this->app->bind('App\Interfaces\TimeLogsInterface', function($app)
        {
            return new \App\EmployeeMock();
        });

        $this->app->bind('App\Interfaces\LeaveRequestInterface', function($app)
        {
            return new \App\EmployeeMock();
        });
    }
}
