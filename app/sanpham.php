<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class sanpham extends Model
{
    protected $table = 'sanpham';
    protected $fillable = ['ID_SP', 'ID_DAILY', 'ID_LOAISP', 'TEN_SP', 'SOLUONG', 'TINH_TRANG', 'MO_TA'];

    public function index($limit, $theloai, $daily)
    {
        if($theloai == false)
        {
            $products = sanpham::where('ID_DAILY',$daily)->paginate($limit);
            return $products;
        }
        else {
            $products = sanpham::where('ID_DAILY',$daily)->where('ID_LOAISP',$theloai)->paginate($limit);
            return $products;
        }
    }
}
