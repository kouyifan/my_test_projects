<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function __construct()
    {

    }

    public function login(Request $request)
    {

        return view('front.user.login');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'email' =>  'required|email',
            'password'  =>  'required'
        ]);
        if (\Auth::attempt($data)){
            session()->flash('success','登陆成功');
            return redirect()->route('home');
        } else{
            session()->flash('danger','登陆失败');
            return redirect()->route('home');
        }



    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

}
