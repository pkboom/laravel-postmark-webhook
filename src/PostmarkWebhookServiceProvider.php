<?php

namespace Pkboom\PostmarkWebhook;

use Illuminate\Support\ServiceProvider;
use Pkboom\PostmarkWebhook\Commands\PostmarkMessageShowCommand;
use Pkboom\PostmarkWebhook\Commands\PostmarkMessageRemoveCommand;

class PostmarkWebhookServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/postmark.php', 'postmark');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/postmark.php' => config_path('postmark.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PostmarkMessageShowCommand::class,
                PostmarkMessageRemoveCommand::class,
            ]);
        }
    }
}
