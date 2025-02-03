<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;  
use App\Models\KelolaTema;  

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            ['layouts.admin.app', 'welcome'], 
            function ($view) {
                $kelolaTema = KelolaTema::first(); 

                $view->with('kelolaTema', $kelolaTema);
            }
        );
    }
}
