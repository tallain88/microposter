<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show($userId)
    {
        $user = User::find($userId);
        $user_profile = $user->profile()->first();
        return view('profile')->with('user_profile');
    }

    
}
