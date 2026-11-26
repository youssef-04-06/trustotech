<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This function is executed when we run `php artisan migrate`
     */
    public function up(): void
    {
        // Create 'users' table
        Schema::create('users', function (Blueprint $table) {
            $table->id();                            // Primary key (auto-increment)
            $table->string('name');                  // User's name
            $table->string('email')->unique();       // User email (unique)
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password');              // Password (hashed)
            $table->rememberToken();                 // Token for "remember me" login
            $table->timestamps();                    // Created_at and updated_at timestamps
        });

        // Create 'password_reset_tokens' table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();      // Email as primary key
            $table->string('token');                 // Token used for resetting password
            $table->timestamp('created_at')->nullable(); // When token was created
        });

        // Create 'sessions' table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();         // Session ID
            $table->foreignId('user_id')->nullable()->index(); // Link to user (optional)
            $table->string('ip_address', 45)->nullable();      // User IP address
            $table->text('user_agent')->nullable();            // Browser/device info
            $table->longText('payload');                       // Session data
            $table->integer('last_activity')->index();         // Timestamp of last activity
        });
    }

    /**
     * Reverse the migrations.
     * This function is executed when we run `php artisan migrate:rollback`
     */
    public function down(): void
    {
        Schema::dropIfExists('users');                     // Delete users table
        Schema::dropIfExists('password_reset_tokens');    // Delete password reset tokens table
        Schema::dropIfExists('sessions');                 // Delete sessions table
    }
};