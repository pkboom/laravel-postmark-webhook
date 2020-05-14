<?php

namespace Pkboom\PostmarkWebhook\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class PostmarkWebhookMiddleware
{
    public function handle($request, Closure $next)
    {
        abort_unless($request->isMethod('post'), Response::HTTP_FORBIDDEN, 'Only POST requests are allowed.');

        if ($this->verify($request)) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN, 'Wrong email or message id');
    }

    public function verify($request)
    {
        return config('postmark.user') === $request->headers->get('php-auth-user') &&
            config('postmark.password') === $request->headers->get('php-auth-pw');
    }
}
