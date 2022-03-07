<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class RegistarPetaniController extends Controller
{
    public function create(Request $request) {
        if (Auth::attempt ($request ->only('name','phone','email','password',)))
    {
        return redirect('/nurseries');
    }
        return redirect('/register_prtani');
            
        
    }
    public function index() {
        return view('nurseries.register-petani');
    }
    
}
