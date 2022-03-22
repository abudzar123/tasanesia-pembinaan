<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profileInstantion(Request $request)
    {
        $profile_institusi = \App\Models\instantion::all(); 
        return view('profile.profile-institusi', ['profile_institusi' =>$profile_institusi]);
    }
    public function profileNursery(Request $request)
    {
        $profile_petani = \App\Models\nurseries::all(); 
        return view('profile.profile-petani',['profile_petani'=>$profile_petani]);
    }
    public function profileCoach(Request $request)
    {
        $profile_pembina = \App\Models\coach::all(); 
        return view('profile.profile-pembina',['profile_pembina'=>$profile_pembina]);
    }
}

