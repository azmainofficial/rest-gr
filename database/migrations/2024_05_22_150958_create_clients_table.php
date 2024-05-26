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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('unit_name');
            $table->string('floor');
            $table->string('block');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('present_address');
            $table->string('gender');
            $table->string('occupation');
            $table->string('formal_picture')->nullable();
            $table->string('nid_picture')->nullable();
            $table->text('short_details');
            $table->string('status')->default('0');
            $table->foreignId('unit_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
