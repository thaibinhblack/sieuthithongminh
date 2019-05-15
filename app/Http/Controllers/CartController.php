<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\khachhang;
use App\phuongthucvanchuyen;
use Illuminate\Support\Str;
use DateTime;
use App\donhang;
use App\chitietdonhang;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // $request->session()->forget('cart');
       $ptvc = phuongthucvanchuyen::all();
        if($request->session()->has('cart'))
        {
            $carts = $request->session()->get('cart');
            return view('cart',compact('carts','ptvc'));
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = sanpham::where('ID_SP',$request->get('ID_SP'))->with('getImage')->first();
       
        if($product)
        {
            $data = [
                'product' => $product,
                'soluong' => $request->get('SOLUONG')
            ];
            if($request->session()->has('cart'))
            {
                $i=0;
               foreach(  $request->session()->get('cart') as $cart)
               {
                   if($cart['product']->ID_SP == $request->get('ID_SP'))
                   {
                       
                       $cart['soluong'] = $cart['soluong'] + $request->get('SOLUONG');
                       $request->session()->put('cart.'.$i, $cart);
                       return redirect()->back()->with('success','Bạn vừa thêm một sản phẩm vào giỏ hàng');
                   }
                   $i=$i+1;
               }
            }
           // $request->session()->get('key', 'default');
            $request->session()->push('cart',$data);
            return redirect()->back()->with('success','Bạn vừa thêm một sản phẩm vào giỏ hàng');
        }
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
    public function update(Request $request,$id,$soluong)
    {
        if($request->session()->has('cart'))
        {
            $i=0;
            foreach($request->session()->has('cart') as $cart)
            {
                if($cart['product']->ID_SP == $id)
                {
                    $cart['soluong'] = $cart['soluong'] + $soluong;
                    $request->session()->put('cart.'.$i, $cart);
                }
                $i=$i+1;
            }
        }
        return response()->json($id, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->session()->has('cart'))
        {
            $i=0;
            foreach($request->session()->get('cart') as $cart)
            {
                if($cart['product']->ID_SP == $request->get('ID_SP'))
                {
                    $request->session()->forget('cart.'.$i);           
                }
                $i=$i+1;
            }
            return redirect()->back()->with('success','Bạn vừa mới xóa một sản phẩm khỏi giỏ hàng :(');
        }
    }

    public function delete(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->back()->with('success','Bạn vừa mới xóa một sản phẩm khỏi giỏ hàng :(');
    }

    public function thanhtoan(Request $request)
    {
        $id = Str::random(9);
        $id_donghang = Str::random(9);
        $khachhang = new khachhang([
            'ID_KH' => $id,
            'TEN_KH' => $request->get('USERNAME'),
            'DIA_CHI' => $request->get('USER_ADDRESS'),
            'EMAIL' => $request->get('USER_EMAIL'),
            'SDT' => $request->get('USER_PHONE')
        ]);
        $khachhang->save();
        $donhang = new donhang([
            'ID_DONHANG' => $id_donghang,
            'ID_HTTT' => '123321',
            'ID_TRANGTHAI' => '123',
            'ID_PHUONGTHUC' => $request->get('ship'),
            'TEN_DONHANG' => $request->get('USERNAME'),
            'THOI_GIAN_DAT_HANG' => new Datetime('NOW')
         ]);
        $SOLUONG_SP = $request->get('soluong');
        
         $donhang->save();
         $i=0;
        foreach($request->get('ID_SANPHAM') as $sp)
        {
            $chitiet = new chitietdonhang([
                
                'ID_SP' => $sp,
                'ID_KH' => $id,
                'ID_DONHANG' => $id_donghang,
                'SOLUONG_SP' => $SOLUONG_SP[$i]
            ]);
            $i = $i+1;
            $chitiet->save();
        }
        $request->session()->forget('cart');
        return redirect('/');
    }
}
