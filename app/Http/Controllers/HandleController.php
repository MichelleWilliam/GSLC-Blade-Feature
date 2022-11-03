<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function home()
//    {
//        return view('home');
//    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function part1(){
        return view('p1');
    }

    public function part2(){
        return view('p2');
    }

    public function loginPage(){
        return view('login');
    }

    public function loginLogic(Request $req){
        if(($req->name == 'admin' && $req->password == '123') || ($req->name == 'user' && $req->password == '123')){
            return view('home')->with('name',$req->name);
        }
        return redirect()->back();


    }
}
