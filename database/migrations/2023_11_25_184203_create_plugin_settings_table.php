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
        Schema::create('plugin_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_phone')->default(false);
            $table->string('phone_no');
            $table->boolean('is_whatsapp')->default(false);
            $table->string('whatsapp_no');
            $table->boolean('is_tawk')->default(false);
            $table->string('tawk_src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plugin_settings');
    }
};
