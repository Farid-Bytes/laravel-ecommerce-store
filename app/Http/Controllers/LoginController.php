<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function admin_verification(Request $req) {
        $req->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if (login::where('name' , $req->name)->where('password' , $req->password)->exists()) {
            return view('dashboard');
        }
            return redirect('/');
        
        
    }
}
