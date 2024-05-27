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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id');
            $table->integer('vnp_Amount');
            $table->string('vnp_BankCode');
            $table->string('vnp_CardType');
            $table->string('vnp_OderInfo');
            $table->string('vnp_PayDate');
            $table->string('vnp_TmnCode');
            $table->string('vnp_ResponseCode');
            $table->string('vnp_TransactionNo');//mã dao dịch
            $table->string('vnp_TransactionStatus');
            $table->string('vnp_TxnRef');
            $table->text('vnp_SecureHash');
            $table->string('status');
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
        Schema::dropIfExists('payments');
    }
};
