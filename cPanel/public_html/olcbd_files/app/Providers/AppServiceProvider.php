<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use App\CreatePage;

use App\Menu;

use App\ImageContent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Side Menu global Variable Declaration
        view()->composer('layouts.app', function($view)
        {
            $home_right_sidebar_menu = CreatePage::orderBy('created_at','desc')->get();
            // $home_right_sidebar_menu = CreatePage::orderBy('created_at','desc')->get();
            $view->with('sidemenus', $home_right_sidebar_menu);
        });

        // Nav Menu global Variable Declaration
        view()->composer('layouts.app', function($view)
        {
            $home_navbar_menu = Menu::orderBy('created_at','desc')->get();
            // $home_navbar_menu = Menu::orderBy('created_at','desc')->get();
            $view->with('navmenu', $home_navbar_menu);
        });

        // Custom Image containing pages global Variable Declaration
        view()->composer('layouts.app', function($view)
        {
            $image_pages = ImageContent::orderBy('created_at','desc')->get();
            $view->with('image_items', $image_pages);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
