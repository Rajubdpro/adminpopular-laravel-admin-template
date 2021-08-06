<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\setting;
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
    
      $settinginfo = setting::first();
      View::share('settinginfo',$settinginfo);


        $admin_menu_list = array(
        'Dashboard',
        'User',
        'Page',
        'Newsletter',
        'Settings',
        );
       View::share( 'admin_menu_list', $admin_menu_list);
      
    }
}
