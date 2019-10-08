<?php

namespace App\Http\Controllers\GoodsNew;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function addGoods(){
        return view('goods.addGoods');
    }

    public function doAdd(){

    }
}
