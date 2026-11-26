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
        // Normally we would add new columns here.
        // For example, adding a 'role' column to the users table:
        // Schema::table('users', function (Blueprint $table) {
        //     $table->string('role')->default('user');
        // });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Here we are adding the 'role' column back if we roll back the migration
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user'); // Default role is 'user'
        });
    }
};