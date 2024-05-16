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
            $table->integer('room_id');
            $table->timestamps();
            $table->string('comment')->nullable();
            $table->integer('rating');
           $table->integer('is_approved')->default(1); // is_approved: là đã được kiểm duyệt đánh giá hay chưa | mặc định là 1 thĩ được duyệt
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
