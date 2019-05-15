<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\hinhanhsanpham;
use App\khuyenmai;
use App\quatang;
use App\giamgia;
use Illuminate\Support\Str;
use File;
use DateTime;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $id = Str::random(9);
        $product = new sanpham([
            'ID_SP' => $id,
            'ID_DAILY' => $request->session()->get('account.ID_DAILY'),
            'ID_LOAISP' => $request->get('cat'),
            'TEN_SP' => $request->get('TENSP'),
            'SOLUONG' => $request->get('SOLUONG'),
            'TINH_TRANG' => $request->get('TINH_TRANG'),
            'GIA_SP' => $request->get('GIA_SP'),
            'DONVI_SP' => $request->get('DONVI_SP'),
            'MOTA' => $request->get('MOTA')

        ]);
        $product->save();
        if($request->has('HINHTHUC'))
        {
            if($request->get('HINHTHUC') == 0)
            {
                $id_km = Str::random(9);
                $hinhthuc = new khuyenmai([
                    'ID_KM' => $id_km,
                    'HINHTHUC_KM' => 'SALE',
                    'NGAYBD_KM' => new DateTime('NOW'),
                    'NGAYKT_KM' => $request->get('NGAY_KT')
                ]);
                $hinhthuc->save();
                $giamgia = new giamgia([
                    'ID_KM' => $id_km,
                    'ID_SP' => $id,
                    'GIA_GIAM' => $request->get('GIAMGIA')
                ]);
                $giamgia->save();
               
            }
            elseif($request->get('HINHTHUC') == 1)
            {
                $id_km = Str::random(9);
                $hinhthuc = new khuyenmai([
                    'ID_KM' => $id_km,
                    'HINHTHUC_KM' => 'QUÀ TẶNG',
                    'NGAYBD_KM' => new DateTime('NOW'),
                    'NGAYKT_KM' => $request->get('NGAY_KT')
                ]);
                $hinhthuc->save();
                $quatang = new quatang([
                    'ID_SP' => $id,
                    'SAN_ID_SP' => $request->get('ID_SAN_SP'),
                    'ID_KM' => $id_km
                ]);
                $quatang->save();
            
            }
            else {
                $id_km = Str::random(9);
                $hinhthuc = new khuyenmai([
                    'ID_KM' => $id_km,
                    'HINHTHUC_KM' => 'QUÀ TẶNG + SALE',
                    'NGAYBD_KM' => new DateTime('NOW'),
                    'NGAYKT_KM' => $request->get('NGAY_KT')
                ]);
                $hinhthuc->save();
                $quatang = new quatang([
                    'ID_SP' => $id,
                    'SAN_ID_SP' => $request->get('ID_SAN_SP'),
                    'ID_KM' => $id_km
                ]);
                $quatang->save();
                $giamgia = new giamgia([
                    'ID_KM' => $id_km,
                    'ID_SP' => $id,
                    'GIA_GIAM' => $request->get('GIAMGIA')
                ]);
                $giamgia->save();
            }
            //return response()->json($request->all(), 200);
            return redirect()->back()->with('Bạn vừa thêm một sản phẩm mới!');
        }
       
        foreach($request->file('fileimage') as $image)
        {
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/', $name);  
            $data[] = $name;  
        }
        foreach($data as $image)
        {
            $hinhanhsp = new hinhanhsanpham([
                'ID_HINHANH' => Str::random(9),
                'ID_SP' => $id,
                'TEN_HINHANH'=> $image,
                'DUONGDAN' => '/images/'. $image
            ]);
            $hinhanhsp->save();
        }
        return redirect()->back()->with('success','Thêm sản phẩm mới thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        if($request->has('hinhthuc'))
        {
            if($request->get('hinhthuc') == 'giamgia')
            {
                $products = sanpham::join('giamgia','sanpham.ID_SP','giamgia.ID_SP')->get();
                return response()->json($products, 200);
            }
        }
        return response()->json(sanpham::where('ID_DAILY',$id)->get(), 200);
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
    public function update(Request $request)
    {
        sanpham::where('ID_SP',$request->get('ID_SP'))->update([
            'ID_LOAISP' => $request->get('cat'),
            'TEN_SP' => $request->get('TEN_SP'),
            'SOLUONG' => $request->get('SOLUONG'),
            'TINH_TRANG' => $request->get('TINH_TRANG'),
            'GIA_SP' => $request->get('GIA_SP'),
            'DONVI_SP' => $request->get('DONVI_SP'),
            'MOTA' => $request->get('MOTA')
        ]);
        if($request->has('fileimage'))
        {
            foreach($request->file('fileimage') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
            foreach($data as $image)
            {
                $hinhanhsp = new hinhanhsanpham([
                    'ID_HINHANH' => Str::random(9),
                    'ID_SP' => $request->get('ID_SP'),
                    'TEN_HINHANH'=> $image,
                    'DUONGDAN' => '/images/'. $image
                ]);
                $hinhanhsp->save();
            }
        }
        return redirect()->back()->with('success','Cập nhật thành công!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = hinhanhsanpham::where('ID_SP',$id)->get();
        foreach($images as $image)
        {
            File::delete(public_path('/').$image->DUONGDAN);
        }
        //$destinationPath = 'your_path';
        
        hinhanhsanpham::where('ID_SP',$id)->delete();
        sanpham::where('ID_SP',$id)->delete();
        return redirect('/admin?page=product')->with('success','Bạn vừa mới xóa một sản phẩm!');
    }
}
