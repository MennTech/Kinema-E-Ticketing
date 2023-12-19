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
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('poster');
            $table->string('judul_film');
            $table->string('genre');
            $table->string('durasi');
            $table->enum('status', ['Now Playing', 'Coming Soon', 'Not Show']);
            $table->integer('ratingUsia');
            $table->string('sutradara');
            $table->string('actor');
            $table->longText('sinopsis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
