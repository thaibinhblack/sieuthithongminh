<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table = 'khuyenmai';
    protected $fillable = ['ID_KM', 'HINHTHUC_KM', 'NGAYBD_KM', 'NGAYKT_KM'];
}
