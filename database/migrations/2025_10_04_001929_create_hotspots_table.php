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
        Schema::create('hotspots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_scene')->constrained('scenes')->cascadeOnDelete();
            $table->string('type'); // scene / info
            $table->integer('pitch')->nullable();
            $table->integer('yaw')->nullable();
            $table->string('text')->nullable();
            $table->foreignId('target_scene')->nullable()->constrained('scenes')->nullOnDelete();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotspots');
    }
};
