<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = 'loaisanpham';
    protected $fillable = ['ID_LOAISP', 'LOAI_SAN_PHAM', 'MO_TA'];

    public function index()
    {
        $theloai = theloai::all();
        return $theloai;
    }
}
