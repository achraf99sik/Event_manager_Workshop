<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function showProfile()
    {
        return view('user.userProfil'); 
    }
    
    public function showDashboard()
    {
        return view('admin.dashboard'); 
    }
}