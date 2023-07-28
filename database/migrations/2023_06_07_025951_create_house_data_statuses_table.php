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
        Schema::create('house_data_statuses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('house_data_id')->constrained('house_data')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['active', 'non-active']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_data_statuses');
    }
};
