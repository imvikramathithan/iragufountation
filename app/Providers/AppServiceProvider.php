<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Courses;
use App\Models\ServiceManagement;


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
    // Share both courses and management services with all views
    View::share([
        'courses' => Courses::with('services')->get(),
        'managementServices' => ServiceManagement::all(),
    ]);
}
}
