<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\giamgia;
class SingleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('id'))
        {
            if(giamgia::where('ID_SP',$request->GET('id'))->first())
            {
                $product = sanpham::join('giamgia','sanpham.ID_SP','giamgia.ID_SP')
            ->join('khuyenmai','giamgia.ID_KM','khuyenmai.ID_KM')
            ->join('loaisanpham','sanpham.ID_LOAISP','loaisanpham.ID_LOAISP')
            ->where('sanpham.ID_SP',$request->get('id'))->with('getImage')->first();
            }
            else {
                $product = sanpham::join('loaisanpham','sanpham.ID_LOAISP','loaisanpham.ID_LOAISP')
                ->where('sanpham.ID_SP',$request->get('id'))->with('getImage')->first();
            }
            return view('singleproduct',compact('product'));
        }
        
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
