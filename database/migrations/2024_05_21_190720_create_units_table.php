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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->string('property_type');
            $table->string('property_location');
            $table->string('property_img');
            $table->string('size');
            $table->string('floor_number');
            $table->string('block');
            $table->string('property_rent');
            $table->string('property_utility_cost');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('status')->default(0);
            // $table->string('status')->default('0');
            // $table->foreignId('floor_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
