<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhanhsanpham extends Model
{
    protected $table = 'hinhanhsp';
    protected $fillable = ['ID_HINHANH', 'ID_SP', 'TEN_HINHANH', 'DUONGDAN'];
}
