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
        Schema::create('rate', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('rooms_id');
            $table->timestamps();
            $table->string('comment')->nullable();
            $table->string('rating')->nullable();
           $table->integer('status')->default('hiden'); // ẩn hoặc hiện rating
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate');
    }
};
