<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        View::composer(['admin/includes.*','admin/auth/login'],function($view){
            $view->with('settings',SiteSetting::all()->pluck('value', 'key'));
            View::share('message_globals', Contact::select('id','name','message')->take(3)->get());
        });
    }
}
