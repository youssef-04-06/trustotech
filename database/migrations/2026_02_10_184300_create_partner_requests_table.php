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
        // Create the 'partner_requests' table to store partnership applications
        Schema::create('partner_requests', function (Blueprint $table) {
            $table->id();                // Primary key (auto-increment)
            $table->string('name');      // Name of the person submitting the request
            $table->string('email');     // Email of the partner
            $table->string('phone');     // Phone number of the partner
            $table->string('company_name'); // Name of the company
            $table->string('location');  // Location of the company
            $table->timestamps();        // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Delete the 'partner_requests' table
        Schema::dropIfExists('partner_requests');
    }
};