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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('api_id')->unique();
            $table->foreignId('hometeam_id')->constrained('teams');
            $table->foreignId('awayteam_id')->constrained('teams');
            $table->dateTime('start_date');
            $table->integer('homescore')->default(0);
            $table->integer('awayscore')->default(0);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};