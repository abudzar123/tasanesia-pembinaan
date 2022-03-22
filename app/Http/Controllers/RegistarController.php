<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistarController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request) {
        $validateData =$request->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|email:dns|unique:users',
            'phone' => 'required|min:5|max:255',
            'password'=> 'required|min:5|max:255',
            'password_confirmation' => 'required|min:5|max:255',
            'role'=> 'required|in:admin,petani,institusi,pembina,donatur',
        ]);
        $validateData['password'] = Hash::make($validateData[
            'password'
        ]);
        User::create($validateData);
        return redirect('/login');
         
    }
  
}
