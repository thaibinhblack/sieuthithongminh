<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class sanpham extends Model
{
    protected $table = 'sanpham';
    protected $fillable = ['ID_SP', 'ID_DAILY', 'ID_LOAISP', 'TEN_SP', 'SOLUONG', 'GIA_SP', 'DONVI_SP', 'TINH_TRANG', 'MOTA', 'created_at'];

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

    public function getImage()
    {
        return $this->hasMany('App\hinhanhsanpham','ID_SP','ID_SP')->orderBy('hinhanhsp.created_at','asc');/// san pham co ha
    }

    public function getDonhang()
    {
        return $this->hasMany('App\chitietdonhang','ID_SP','ID_SP');/// san pham co ha
    }
}
