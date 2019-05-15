<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quatang extends Model
{
    protected $table = 'quatang';
    protected $fillable = ['ID_SP', 'SAN_ID_SP', 'ID_KM'];
}
