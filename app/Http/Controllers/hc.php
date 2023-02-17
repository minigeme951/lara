<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hc extends Controller
{
    public function about(){
        $p= \App\Models\Product::Orderby("id","desc")-> limit(5)->get();
        return view ('about',['prod'=>$p]);
    }
    public function showCatalog($name="id", $sort="desc"){
        $product= \App\Models\Product::Orderby($name, $sort)->get();
        $categorys=\App\Models\category::all();
        return view('ProductList',['produ'=>$product,'cat'=>$categorys]);
    }
    public function singleProduct($id){
        $product=\App\Models\Product::find($id);
        return view('OneProd',['produ'=>$product]);
    }
    public function filterr($categoryid=false){
        $categorys=\App\Models\category::all();
        $product= \App\Models\Product::where('category',$categoryid)->get();
        return view('ProductList',['produ'=>$product,'cat'=>$categorys]);
    }
}
