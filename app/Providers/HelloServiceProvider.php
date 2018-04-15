<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            //$view->with('変数名', '値');
            'index', 'App\Http\Composers\HelloComposer'
        );

        View::composer(
            'test', function($view){ //ここで供給するテンプレートをしてする
                //$view->with('変数名', '値');
                $view->with('view_message', 'composer message');
            }
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
