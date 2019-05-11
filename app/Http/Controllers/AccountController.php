<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Account;
use App\khachhang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Cookie;

class AccountController extends Controller
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

    //resign

    public function resign(Request $request)
    {
        $id = Str::random(9);
        $khachhang = new khachhang([
            'ID_KH' => $id,
            'TEN_KH' => $request->get('username'),
            'DIA_CHI' => $request->get('address'),
            'EMAIL' => $request->get('email'),
            'SDT' => $request->get('phone')
        ]);
        $khachhang->save();
        $account = new Account([
            'ID_USER' => $id,
            'USERNAME' => $request->get('username'),
            'EMAIL' => $request->get('email'),
            'PASSWORD' => Hash::make($request->get('password')),
            'REMEMBER_TOKEN' => $request->get('_token')
        ]);
        $account->save();
        $request->session()->put('account', $account);

        //$response->withCookie(cookie('user', $account));
        return redirect()->back()->with('resign','Đăng ký thành công');
        
    }
    //login
    public function login(Request $request)
    {
        $account = Account::where('EMAIL',$request->get('email'))->first();
        if(Hash::check($request->get('password'), $account->PASSWORD))
        {
            $request->session()->put('account', $account);
            return redirect()->back()->with('resign','Đăng nhập thành công');
        }
        return redirect()->back()->with('resign','Đăng nhập thất bại');
    }
    //logout 

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }
}
