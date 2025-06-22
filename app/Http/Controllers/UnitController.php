<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function insert_unit(Request $req){
        Unit::create([
            'name' => $req->name,
        ]);
        return redirect('/admin/unit' );
    }

    public function get_units(){
        $units = Unit::all();
        return view('unit' , compact('units'));
    }

    public function delete_unit($id){
        Unit::where('id' , $id)->delete();
        return redirect('/admin/unit');
    }

    Public function show_unit($id){
        $unit = Unit::where('id' , $id)->first();
        return view('edit-unit' , compact('unit'));

    }

    public function update_unit(Request $req ,$id){
        $unit = Unit::where('id' , $id)->update([
            'name' => $req->name,
        ]);
        return redirect ('/admin/unit');
    }


}
