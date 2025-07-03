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
        Schema::create('rooms', function (Blueprint $table) {
            $table->string('room_number')->primary();
            $table->decimal('rate', 8, 2);
            $table->string('room_name');
            $table->text('room_description');
            $table->string('room_image')->nullable();
            $table->json('amenities')->nullable();
            $table->integer('offer')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
