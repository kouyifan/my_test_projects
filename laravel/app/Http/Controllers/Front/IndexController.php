<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function home(Request $request)
    {
        //
//        session()->flash('success','is ok');

        return view('front.home.home');
    }
}
