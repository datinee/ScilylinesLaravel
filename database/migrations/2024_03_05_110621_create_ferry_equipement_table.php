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
        Schema::create('equipement_ferry', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('ferry_id')->constrained()->cascadeOnDelete();
            $table->foreignId('equipement_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_ferry');
    }
};
