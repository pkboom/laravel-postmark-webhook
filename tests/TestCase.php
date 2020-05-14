<?php

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Pkboom\PostmarkWebhook\PostmarkWebhookServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PostmarkWebhookServiceProvider::class,
        ];
    }
}
