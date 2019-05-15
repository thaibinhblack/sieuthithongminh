<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\tk_dl;
use App\daily;
use App\sanpham;
use App\hinhanhsanpham;
use App\theloai;
use App\chitietdonhang;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('account'))
        {
            if($request->has('page'))
            {
                if($request->get('page') == 'user')
                {
                    $accounts = Account::join('tk_dl','taikhoan.ID_USER','tk_dl.ID_USER')
                    ->join('daily','tk_dl.ID_DAILY','daily.ID_DAILY')
                    ->select('taikhoan.USERNAME','daily.ID_DAILY','daily.TEN_DAILY','daily.EMAIL','daily.SDT','daily.DIACHI_DAILY')->get();

                    return view('admin',compact('accounts'));
                }
                else {
                    $donhangs = chitietdonhang::join('sanpham','chitietdondathang.ID_SP','sanpham.ID_SP')
                    ->join('donhang','chitietdondathang.ID_DONHANG','donhang.ID_DONHANG')
                    ->join('hinhthucthanhtoan','donhang.ID_HTTT','hinhthucthanhtoan.ID_HTTT')
                    ->join('trangthaidonhang','donhang.ID_TRANGTHAI','trangthaidonhang.ID_TRANGTHAI')
                    ->join('phuongthucvanchuyen','donhang.ID_PHUONGTHUC','phuongthucvanchuyen.ID_PHUONGTHUC')
                    
                    ->where('sanpham.ID_DAILY',$request->session()->get('account.ID_DAILY'))
                    ->with('getKH')->get();
                    $theloais = theloai::all();
                    $products = sanpham::where('ID_DAILY',$request->session()->get('account.ID_DAILY'))->get();
                    $product_detail = [];
                    $images = [];
                    if($request->get('action') == 'chitiet')
                    {
                       
                        $product_detail = sanpham::where('ID_SP',$request->get('id'))->first();
                        if($product_detail)
                        {
                            $images = hinhanhsanpham::where('ID_SP',$product_detail->ID_SP)->get();
                        }
                        else {
                            return redirect('/admin?page=product');
                        }
                        
                    }
                    //$products->index(20,false,$request->session()->get('account.ID_DAILY'));
                    return view('admin',compact('products','theloais','product_detail','images','donhangs'));
                }
            }
        }
        else {
            return redirect('/');
        }
        
        
    }

    public function chitiet(Request $request,$id)
    {
        $donhang = chitietdonhang::join('sanpham','chitietdondathang.ID_SP','sanpham.ID_SP')
                    ->join('donhang','chitietdondathang.ID_DONHANG','donhang.ID_DONHANG')
                    ->join('hinhthucthanhtoan','donhang.ID_HTTT','hinhthucthanhtoan.ID_HTTT')
                    ->join('trangthaidonhang','donhang.ID_TRANGTHAI','trangthaidonhang.ID_TRANGTHAI')
                    ->join('phuongthucvanchuyen','donhang.ID_PHUONGTHUC','phuongthucvanchuyen.ID_PHUONGTHUC')
                    
                    ->where('sanpham.ID_DAILY',$request->session()->get('account.ID_DAILY'))
                    ->where('chitietdondathang.ID_DONHANG',$id)
                    ->with('getImage')
                    ->get();
        return view('chitietdonhang',compact('donhang'));
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
