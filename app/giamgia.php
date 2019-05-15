<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giamgia extends Model
{
    protected $table = 'giamgia';
    protected $fillable = ['ID_SP', 'ID_KM', 'GIA_GIAM'];
}
