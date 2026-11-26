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
        // Modify the 'messages' table to add reply functionality
        Schema::table('messages', function (Blueprint $table) {
            $table->text('reply')->nullable();       // Stores admin reply (optional)
            $table->boolean('replied')->default(false); // Indicates if the message has been replied
        });
    }

    /**
     * Reverse the migrations.
     * This function runs when we execute `php artisan migrate:rollback`
     */
    public function down(): void
    {
        // Normally, you would drop these columns when rolling back
        // Example:
        // Schema::table('messages', function (Blueprint $table) {
        //     $table->dropColumn(['reply', 'replied']);
        // });
    }
};