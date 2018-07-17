<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Post;

class RoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {
            $event = Post::take(3)->orderBy('created_at')->get();
            $view->with('events', $event);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
