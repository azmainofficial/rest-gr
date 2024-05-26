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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('unit_name');
            $table->string('floor');
            $table->string('block');
            $table->decimal('confirm_rent', 10, 2);
            $table->decimal('utility_cost', 10, 2);
            $table->string('full_name');
            $table->string('full_name2')->nullable();
            $table->string('user_name');
            $table->string('password');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('formal_picture');
            $table->string('formal_picture2')->nullable();
            $table->string('nid_picture');
            $table->string('nid_picture2')->nullable();
            $table->date('dob');
            $table->string('email');
            $table->string('phone_number');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('aggrement_atch');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->string('profession');
            $table->string('nationality');
            $table->string('religion');
            $table->string('nominee_name')->nullable();
            $table->string('nominee_picture')->nullable();
            $table->string('nominee_nid')->nullable();
            $table->string('nominee_phone_number')->nullable();
            $table->string('relationship')->nullable();
            $table->decimal('share', 5, 2)->nullable();
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
        Schema::dropIfExists('users');
    }
};
