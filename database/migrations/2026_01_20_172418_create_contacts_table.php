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
    public function up(): void
    {
        // Create 'contacts' table to store messages from the contact form
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();             // Primary key (auto-increment)
            $table->string('name');   // Name of the person sending the message
            $table->string('email');  // Email of the sender
            $table->string('subject')->nullable(); // Optional subject of the message
            $table->text('message');  // The actual message content
            $table->timestamps();     // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Delete the 'contacts' table
        Schema::dropIfExists('contacts');
    }
};