<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\tk_dl;
use App\daily;
use App\sanpham;
use App\theloai;
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
                    $theloais = theloai::all();
                    $products = new sanpham();
                    $products->index(20,false,$request->session()->get('account.ID_DAILY'));
                    return view('admin',compact('products','theloais'));
                }
            }
        }
        else {
            return redirect('/');
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
