<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table = 'donhang';
    protected $fillable = ['ID_DONHANG','ID_HTTT','ID_TRANGTHAI','ID_PHUONGTHUC','TEN_DONHANG','THOI_GIAN_DAT_HANG'];
    
}
