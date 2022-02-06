<?php

namespace App\Providers;

use App\Models\Category;
use Laravel\Cashier\Cashier;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Cashier::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('hello', function ($expression) {
            return "&lt;?php echo 'Hello '.{$expression}; ?&gt;";
        });

        View::share('key', 'value'); 

        $categories = Category::all();

        View::share('categories', $categories); 

    }
}
