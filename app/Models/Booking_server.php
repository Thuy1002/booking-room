<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_server extends Model
{
    use HasFactory;
    protected $table = 'booking_service';
    protected $fillable = ['booking_id','service_id'];


    public function booking(){
        return $this->belongsTo(booking::class);
    }

    public function service(){
        return $this->belongsTo(service::class);
    }
}
