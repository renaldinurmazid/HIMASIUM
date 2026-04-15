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
        Schema::create('schedule_calendars', function (Blueprint $table) {
            $table->id();
            $table->string('title_event');
            $table->text('message');
            $table->string('koordinator');
            $table->enum('status',['pending','sent'])->default('pending');
            $table->date('start_event');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_calendars');
    }
};
