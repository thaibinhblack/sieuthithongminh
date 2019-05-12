<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daily extends Model
{
    protected $table = 'daily';
    protected $fillable = ['ID_DAILY', 'TEN_DAILY', 'SDT', 'EMAIL', 'DIACHI_DAILY'];
}
