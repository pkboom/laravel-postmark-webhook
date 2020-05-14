<?php

use Pkboom\PostmarkWebhook\PostmarkWebhookController;
use Pkboom\PostmarkWebhook\Http\Middleware\PostmarkWebhookMiddleware;

Route::post('webhooks/postmark', PostmarkWebhookController::class)->middleware(PostmarkWebhookMiddleware::class);
