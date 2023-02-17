<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
  public function adminshow(){
    $produt= \App\Models\Product::all();
    $categorys=\App\Models\category::all();
    return view('Adminedit',['prod'=>$produt, 'cat'=>$categorys]);
  }
  public function admindelitem($id){
    $produt= \App\Models\Product::find($id)->delete();
    return view('Admindel');
  }
  public function admindelcat($id){
    $categorys=\App\Models\category::find($id)->delete();
    return view('Admindel');
  }
  public function adminaddcat(Request $request){
    \App\Models\category::create(['name'=>request('name')]);
    return view('addcat');
  }
}
