<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This function runs when we execute `php artisan migrate`
     */
    public function up()
    {
        // Create the 'messages' table to store contact or user messages
        Schema::create('messages', function (Blueprint $table) {
            $table->id();               // Primary key (auto-increment)
            $table->string('name');     // Name of the person sending the message
            $table->string('email');    // Email of the sender
            $table->text('message');    // The actual message content
            $table->text('reply')->nullable();        // Admin reply to the message (optional)
            $table->boolean('replied')->default(false); // Whether the message has been replied
            $table->timestamps();       // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Delete the 'messages' table
        Schema::dropIfExists('messages');
    }
};