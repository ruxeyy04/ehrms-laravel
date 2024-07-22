<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HrUserinfo;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Blade::directive('fullName', function () {
            return "<?php echo auth()->user()->first_name . ' ' . auth()->user()->last_name; ?>";
        });
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        View::composer('layouts.header', function ($view) {
            $todaysBirthdays = HrUserinfo::whereHas('personalInfo', function ($query) {
                    $query->whereMonth('birthdate', '=', Carbon::today()->month)
                          ->whereDay('birthdate', '=', Carbon::today()->day);
                })
                ->with('personalInfo') 
                ->get();
    
            $view->with('todaysBirthdays', $todaysBirthdays);
        });
    }
}
