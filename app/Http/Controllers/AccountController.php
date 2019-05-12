<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Account;
use App\khachhang;
use App\tk_dl;
use App\daily;
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
    public function index(Request $request)
    {
        if($request->session()->has('account'))
        {
            if($request->has('id'))
            {
                $account = Account::where('ID_USER',$request->get('id'))->first();
                $daily = Account::join('tk_dl','taikhoan.ID_USER','tk_dl.ID_USER')
                ->join('daily','tk_dl.ID_DAILY','daily.ID_DAILY')->where('taikhoan.ID_USER',$request->get('id'))
                ->select('daily.ID_DAILY','daily.TEN_DAILY','daily.EMAIL','daily.SDT','daily.DIACHI_DAILY')->first();
                return view('account',compact('account','daily'));
            }
            return redirect('/');
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
        $daily = Account::join('tk_dl','taikhoan.ID_USER','tk_dl.ID_USER')
        ->join('daily','tk_dl.ID_DAILY','daily.ID_DAILY')->where('daily.ID_DAILY',$id)
        ->select('taikhoan.USERNAME','taikhoan.QUYEN','daily.ID_DAILY','daily.TEN_DAILY','daily.EMAIL','daily.SDT','daily.DIACHI_DAILY')->first();
        return response()->json($daily, 200);
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
       
        if($request->has('avatar'))
        {
            $avatar = $request->file('avatar');
            if(!empty($avatar)){
                $avt = $request->file('avatar')->getClientOriginalName();
                $avatar->move(public_path().'/image/profile', $avt);
                $account = Account::where('ID_USER',$request->get('id'))->update(
                    [
                        'AVATAR' => 'image/profile/'.$avt
                    ]
                    );
               
                //$account->save();
            }
        }
        if($request->has('username'))
        {
            $account = Account::where('ID_USER',$request->get('id'))->update(
                [
                    'USERNAME' => $request->get('username')
                ]);
           
            ///$account->save();
        }
        return redirect()->back()->with('success','Cập nhật thông tin thành công');
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
        $account = Account::join('tk_dl','taikhoan.ID_USER','tk_dl.ID_USER')->where('EMAIL',$request->get('email'))->first();
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
        return redirect('/');
    }

    //new password

    public function password(Request $request)
    {
        Account::where('ID_USER',$request->session()->get('ID_USER'))->update([
            'PASSWORD' => Hash::make($request->get('passnew'))
        ]);
        return redirect()->back()->with('success','Đổi mật khẩu thành công!');
    }
}
