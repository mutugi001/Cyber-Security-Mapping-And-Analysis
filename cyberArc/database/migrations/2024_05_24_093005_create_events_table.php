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
        Schema::create('events', function (Blueprint $table) {
            $table->Uuid('id')->primary();
            $table->String('Name');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->string('GuestSpeaker');
            // $table->binary('image')->nullable();
            $table->string('image_name');
            $table->string('image_url')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
