<?php

namespace Pkboom\PostmarkWebhook;

use Illuminate\Support\Facades\Request;

class PostmarkWebhookController
{
    public function __invoke()
    {
        PostmarkMessage::create([
            'email' => Request::input('Email'),
            'type' => Request::input('RecordType'),
            'description' => Request::input('Description'),
            'bounced_at' => Request::input('BouncedAt'),
        ]);

        return response('Ok');
    }
}
