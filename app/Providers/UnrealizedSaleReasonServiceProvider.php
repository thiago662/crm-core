<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class UnrealizedSaleReasonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        App::bind('unrealizedsalereason',function() {
           return new \App\UnrealizedSaleReason\UnrealizedSaleReasonManager;
        });
    }
}
