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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->date('checkin');
            $table->date('checkout');
            $table->text('special_request')->nullable();
            $table->string('room_number');
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_phone');
            $table->timestamps();

            $table->foreign('room_number')->references('room_number')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
