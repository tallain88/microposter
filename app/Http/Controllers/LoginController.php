<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    // Return login view
    public function showLogin()
    {
        // return form
        return View::make('login');
    }
}
