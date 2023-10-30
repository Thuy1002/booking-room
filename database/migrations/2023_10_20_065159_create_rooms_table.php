<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('type_id');
            $table->string('service')->nullable();
            $table->string('image')->nullable();
            $table->string('description_img')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('status')->default(0);
            $table->integer('capacity')->nullable();
            $table->string('imagfacilitiese')->nullable();//tiện nghi phòng
            $table->string('view')->nullable(); // hướng phòng
            $table->integer('floor')->nullable();// tầng phòng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
