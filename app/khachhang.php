<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = 'khachhang';
    protected $fillable = ['ID_KH', 'TEN_KH', 'DIA_CHI', 'EMAIL', 'SDT'];
}
