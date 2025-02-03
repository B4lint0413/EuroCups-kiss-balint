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
        Schema::create('eurocup_team', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eurocup_id')->constrained('eurocups');
            $table->foreignId('team_id')->constrained('teams');
            $table->integer('rank');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eurocup_team');
    }
};
