<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\PaytechService;

class PaytechServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PaytechService::class, function($app) {
			return new PaytechService(config('paytech.PAYTECH_API_KEY'),config('paytech.PAYTECH_SECRET_KEY'));
		});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}