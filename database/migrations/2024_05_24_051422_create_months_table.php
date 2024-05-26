<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthsTable extends Migration
{
    public function up()
    {
        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('jan')->default('0');
            $table->string('feb')->default('0');
            $table->string('mar')->default('0');
            $table->string('apr')->default('0');
            $table->string('may')->default('0');
            $table->string('jun')->default('0');
            $table->string('jul')->default('0');
            $table->string('aug')->default('0');
            $table->string('sep')->default('0');
            $table->string('oct')->default('0');
            $table->string('nov')->default('0');
            $table->string('dec')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('months');
    }
}
