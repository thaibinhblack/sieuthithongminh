<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table = 'chitietdondathang';
    protected $fillable = ['ID_KH', 'ID_SP', 'ID_DONHANG', 'SOLUONG_SP'];

    public function getKH()
    {
        
        return $this->hasMany('App\khachhang', 'ID_KH', 'ID_KH');
    }
}
