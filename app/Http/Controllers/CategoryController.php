<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function insert_category(Request $req){
       
        $req->validate([
            'name' => 'required'
        ]);

        // Insert the category
        Category::create([
            'name' => $req->name,
        ]);

        return redirect('/admin/category');
    }

    public function get_category(){
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function delete_category($id){
        $categories = Category::where('id' , $id )->delete();
        return redirect('/admin/category');
    }
   

  
     public function edit_category($id)
     {
         $category = Category::where('id' , $id)->first();
         
         return view('edit-category', compact('category'));
     }
 
    public function update_category(Request $request , $id){
        $category = Category::where('id' , $id)->update([
            'name' => $request->name,
        ]);
        return redirect('/admin/category');

    }
    
   
}
