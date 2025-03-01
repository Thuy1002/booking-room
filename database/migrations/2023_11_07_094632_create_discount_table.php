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
        Schema::create('discount', function (Blueprint $table) {
            $table->id();
            $table->integer('rooms_id')->nullable();
            $table->string('title')->default();
            $table->string('code')->unique()->default(); // Mã giảm giá (unique)
            $table->string('image')->nullable();
            $table->string('description')->nullable(); // Mô tả (có thể null)
            $table->integer('amount'); // Giá trị giảm giá
            $table->integer('status')->default(1);
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('discount');
    }
};
