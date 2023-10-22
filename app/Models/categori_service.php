<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori_service extends Model
{
    use HasFactory;
    protected $table = 'categori_servive';
    protected $filable = ['title','content'];

}
