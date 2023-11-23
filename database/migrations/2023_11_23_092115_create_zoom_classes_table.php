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
        Schema::create('zoom_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('meeting_id');
            $table->string('host_id');
            $table->string('topic');
            $table->string('agenda');
            $table->string('start_at');
            $table->string('duration');
            $table->string('type');
            $table->string('approval');
            $table->string('email');
            $table->string('join_url');
            $table->string('password');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zoom_classes');
    }
};
