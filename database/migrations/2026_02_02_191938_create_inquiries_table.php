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
        // Create 'inquiries' table to store user service requests
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();                    // Primary key (auto-increment)
            $table->string('full_name');     // Full name of the person making the inquiry
            $table->string('email');         // Email of the inquirer
            $table->string('service')->nullable();          // Optional: selected service
            $table->string('project_details')->nullable(); // Optional: project description/details
            $table->timestamps();            // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Delete the 'inquiries' table
        Schema::dropIfExists('inquiries');
    }
};