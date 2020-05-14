<?php

namespace Pkboom\PostmarkWebhook\Commands;

use Illuminate\Console\Command;
use Pkboom\PostmarkWebhook\PostmarkMessage;

class PostmarkMessageShowCommand extends Command
{
    protected $signature = 'postmark-message:show {--bounce} {--spam}';

    public function handle()
    {
        $messages = PostmarkMessage::query()
            ->when($this->option('bounce'), function ($query) {
                $query->whereType('Bounce');
            })
            ->when($this->option('spam'), function ($query) {
                $query->whereType('SpamComplaint');
            })
            ->get()
            ->map(function ($message) {
                return [
                    'email' => $message->email,
                    'type' => $message->type,
                    'description' => $message->description,
                    'bounced_at' => $message->bounced_at->format('Y-m-d H:i:m'),
                ];
            });

        $headers = ['Email', 'Type', 'Description', 'Bounded At'];

        $this->table($headers, $messages);
    }
}
