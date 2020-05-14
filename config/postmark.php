<?php

return [
    /*
     * You can set up postmark user and password here. They should be the same values as you set up
     * in postmark webhook page.
     */
    'user' => env('POSTMARK_WEBHOOK_USER', null),
    'password' => env('POSTMARK_WEBHOOK_PASSWORD', null),
];
