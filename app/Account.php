<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'taikhoan';
    protected $fillable = ['ID_USER' ,'USERNAME' ,'EMAIL' ,'PASSWORD', 'AVATAR'];
}
