<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori_service extends Model
{
    use HasFactory;
    protected $filable = ['title','content'];
}
