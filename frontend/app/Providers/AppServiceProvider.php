<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Daily;

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
    $daily = Daily::whereDay('created_at', now()->day)->select('img', 'title', 'description', 'created_at')->latest('created_at')->paginate(2);
    view()->share('daily', $daily);
    }
}
