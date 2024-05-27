<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = ['rooms_id', 'service_id', 'user_id', 'booking_date', 'check_in_date', 'check_out_date', 'adults', 'status', 'payment_status', 'children', 'total_price', 'description'];


    public function room()
    {
        return $this->belongsTo(rooms::class, 'rooms_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function services()
    {
        return $this->belongsToMany(service::class, 'booking_service');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
