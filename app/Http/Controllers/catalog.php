<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalog extends Controller
{
    public function listall($name='id',$sort='desc'){
        $prod = \App\Models\catalog::OrderBy($name,$sort)->get();
        $cat = \App\Models\category::all();
        return view ('catalog',['prod'=>$prod,'cat'=>$cat]);
    }
    public function filterr($id){
        $prod = \App\Models\catalog::where('category',$id)->get();
        $cat = \App\Models\category::all();
        return view ('catalog',['prod'=>$prod,'cat'=>$cat]);
    }
    public function oneprod($id){
        $prod=\App\Models\catalog::where('id',$id)->get();
        return view('oneprod',['prod'=>$prod]);
    }
}
