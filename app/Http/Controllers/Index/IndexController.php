<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
//    商品首页
    public function index(Request $request){
//        $session=request()->session()->get('name');
//    dd($session);
//        if ($session==null){
//            return "<script>window.location.href='/login/login',alert('您还未登陆')</script>";
//        }
        $data = DB::table('goods')->pageinate(4);
        foreach($data as $k=>$v){
            $data[$k]->goods_pic = ltrim($v->goods_pic,'|');
        }
        $session = $request->session()->get('users');
        return view('/Index.index',compact('data','session'));
    }
//    商品详情页
    public function proinfo(){
        $goods_id = request()->goods_id;
        dd($goods_id);
    }



}
