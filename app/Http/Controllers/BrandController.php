<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function insert_brand(Request $req){
        Brand::create([
            'name' => $req->name,
        ]);
        return redirect('/admin/brand');
    }

    public function get_brands(){
        $brands = Brand::all();
        return view('brand' , compact('brands'));
    }

    public function delete_brand($id){
        Brand::where('id' , $id)->delete();
        return redirect('/admin/brand');
    }

    Public function show_brand($id){
        $brand = Brand::where('id' , $id)->first();
        return view('edit-brand' , compact('brand'));

    }

    public function update_brand(Request $req ,$id){
        $brand = Brand::where('id' , $id)->update([
            'name' => $req->name,
        ]);
        return redirect ('/admin/brand');
    }

}
