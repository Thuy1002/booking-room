<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
      'booking_id',
      'vnp_Amount',
      'vnp_BankCode',
      'vnp_CardType',
      'vnp_OderInfo',
      'vnp_PayDate',
      'vnp_TmnCode',
      'vnp_ResponseCode',
      'vnp_TransactionNo',
      'vnp_TransactionStatus',
      'vnp_TxnRef',
      'vnp_SecureHash',
      'status',
  ];


    public function booking()
    {
      return $this->belongsTo(booking::class);
    }
}
