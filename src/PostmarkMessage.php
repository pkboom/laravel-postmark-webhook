<?php

namespace Pkboom\PostmarkWebhook;

use Illuminate\Database\Eloquent\Model;

class PostmarkMessage extends Model
{
    protected $guarded = [];

    protected $dates = [
        'bounced_at',
    ];

    public $timestamps = false;
}
