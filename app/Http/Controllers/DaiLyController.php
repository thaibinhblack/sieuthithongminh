<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daily;
use App\tk_dl;
use App\Account;
use Illuminate\Support\Str;
class DaiLyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = Str::random(9);
        $daily = new daily([
            'ID_DAILY' => $id,
            'TEN_DAILY' => $request->get('name'),
            'SDT' => $request->get('phone'),
            'EMAIL' => $request->get('email'),
            'DIACHI_DAILY' => $request->get('address')
        ]);

        $daily->save();
        $tk_dl = new tk_dl([
            'ID_DAILY' => $id,
            'ID_USER' => $request->get('id')
        ]);
        $tk_dl->save();
        Account::where('ID_USER',$request->get('id'))->update([
            'QUYEN' => 1
        ]);
        return redirect()->back()->with('success','Đăng ký ĐẠI LÝ thành công!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    public function update(Request $request)
    {
        daily::join('tk_dl','daily.ID_DAILY','tk_dl.ID_DAILY')
        ->join('taikhoan','tk_dl.ID_USER','taikhoan.ID_USER')->where('daily.ID_DAILY',$request->get('ID_DAILY'))
        ->update([
            'taikhoan.QUYEN' => $request->get('QUYEN'),
            'TEN_DAILY' => $request->get('TEN_DAILY'),
            'daily.EMAIL' => $request->get('EMAIL'),
            'SDT' => $request->get('SDT'),
            'DIACHI_DAILY' => $request->get('DIACHI_DAILY')
        ]);
        return redirect()->back()->with('success','Cập nhật thành công');
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
