<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms_service extends Model
{
    use HasFactory;
    protected $table = 'rooms_service'; // Tên của bảng trung gian

    protected $fillable = [
        'rooms_id',    // ID của phòng
        'service_id', // ID của dịch vụ
        // Các trường khác nếu cần
    ];
    public function room(){
        return $this->belongsTo(rooms::class);
     }
    public function service()
    {
        return $this->belongsTo(service::class);
    }
}
