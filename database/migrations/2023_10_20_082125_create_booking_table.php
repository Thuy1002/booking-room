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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->integer('rooms_id');
         // $table->integer('service_id')->nullable();
            $table->integer('user_id');
            $table->date('booking_date');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('adults')->nullable();
            $table->integer('status')->default(1);
            $table->string('payment_status')->default('null'); // đã thanh toán và chưa thanh toán
            $table->integer('children')->nullable();
            $table->integer('total_price')->nullable();
            //$table->integer('total_price_curr')->nullable();
            $table->text('description')->nullable();
            $table->date('check_out_date_reminder')->nullable();
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
        Schema::dropIfExists('booking');
    }
};
