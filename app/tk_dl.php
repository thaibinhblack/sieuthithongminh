<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tk_dl extends Model
{
    protected $table = 'tk_dl';
    protected $fillable = ['ID_DAILY', 'ID_USER'];
}
