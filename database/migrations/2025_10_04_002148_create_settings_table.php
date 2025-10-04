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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('first_scene')->nullable()->constrained('scenes')->nullOnDelete();
            $table->string('author')->nullable();
            $table->boolean('auto_load')->default(0);
            $table->integer('scene_fade')->nullable();
            $table->integer('auto_rotate')->nullable();
            $table->integer('rotate_delay')->nullable();
            $table->boolean('compass')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
