<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{ 
    use HasFactory;
    protected $fillable = ['room_id','user_id','booking_date','check_in_date','check_out_date','adults','status','payment_status','children','total_price','description'];
}
