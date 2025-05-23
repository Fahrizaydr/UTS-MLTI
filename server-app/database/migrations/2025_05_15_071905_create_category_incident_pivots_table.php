<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_incident_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_id')->constrained(
                'incidents'
            )->onDelete('cascade');
            $table->foreignId('category_incident_id')->constrained(
                'category_incidents'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_incident_pivots');
    }
};
