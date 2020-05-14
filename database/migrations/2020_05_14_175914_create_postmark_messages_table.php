<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostmarkMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('postmark_messages', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('type');
            $table->string('description')->nullable();
            $table->timestamp('bounced_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('postmark_messages');
    }
}
