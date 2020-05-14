<?php

namespace Pkboom\PostmarkWebhook\Commands;

use Illuminate\Console\Command;
use Pkboom\PostmarkWebhook\PostmarkMessage;

class PostmarkMessageRemoveCommand extends Command
{
    protected $signature = 'postmark-message:remove';

    public function handle()
    {
        PostmarkMessage::truncate();

        $this->info('Postmark messages have been removed.');
    }
}
