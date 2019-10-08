<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    public function addGoods(){
//        dd(storage_path('app\public'));
        return view ('/goods.addGoods');
    }

    public function doAddGoods(request $request){

        $data = Request() -> all();
        $data['add_time'] = time();
        unset($data['_token']);

        if(request()->hasFile('goods_pic')){
            $path = $request->file('goods_pic')->store('goods');
            $aa = asset('storage/'.$path);
            // dd($aa);
            $data['goods_pic'] = $aa;
        }
        $a = DB::table('Goods')->insert($data);
        if($a){
            return redirect('/admin/goods/index');
        }else{
            return redirect()->back();
        }

    }

    public function index()
    {
        //搜索
        $keywords=request()->keywords??'';
        $where =[];
        if ($keywords) {
            $where[]=['goods_name','like',"%$keywords%"];
        }
        //分页
        $data = DB::table('Goods')->where($where)->paginate(3);
        return view('/goods.index',['data'=>$data,'keywords'=>$keywords]);
    }

    public function del(request $request){
        $data = request() -> all();
        $a = DB::table('Goods')->where('id','=',$data['id'])->delete();
        if($a){
            return redirect('admin/goods/index');
        }else{
            return redirect('删除失败','admin/goods/index');
        }
    }

    public function edit($goods_id)
    {
        $data = DB::table('Goods')->where(['id'=>$goods_id])->first();
        // dd($data);
        return view('/goods.edit',compact('data'));
    }
    public function update(Request $request)
    {
        $data = $request ->except(['_token']);
        $goods_id = $request->id;
        if(request()->hasFile('goods_pic')){
            $path = $request->file('goods_pic')->store('goods');
            $dada=asset('storage/'.$path);
            $data['goods_pic']=$dada;
            // dd($dada);die;
        }
        $res=DB::table('Goods')->where(['id'=>$goods_id])->update($data);
        if($res){
            return redirect('admin/goods/index');
        }
    }
}
