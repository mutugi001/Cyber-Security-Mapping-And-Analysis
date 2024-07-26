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
        Schema::create('events_histories', function (Blueprint $table) {
            $table->Uuid('id')->primarykey();
            $table->String('Name');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->string('GuestSpeaker');
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
        Schema::dropIfExists('events_histories');
    }
};
