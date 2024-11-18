<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop the table if it already exists to avoid conflicts
        Schema::dropIfExists('password_reset_tokens');
        
        // Create the table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Set email as the primary key
            $table->string('token');           // Token column
            $table->timestamp('created_at')->nullable(); // Optional created_at column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the table when rolling back the migration
        Schema::dropIfExists('password_reset_tokens');
    }
};
