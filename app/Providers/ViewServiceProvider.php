<?php

namespace App\Providers;

use App\Models\SiteConfig;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        \View::composer([
            'layouts.partial.footer',
            'static-pages.contact'
        ], function(View $view) {
            $setting = SiteConfig::first();
            $view->with('setting', $setting);
        });

    }

}
