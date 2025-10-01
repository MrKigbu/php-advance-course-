<?php
namespace App\Controller;

use App\Core\Request;

class UserController 
{
    //user
    public static function user($request)
    {
        echo "<h1>User Page</h1>";
    }

//dashboard
    public static function dashboard(Request $request)
    {
        
        return view('pages/dashboard');         
    }
    //wallet
    public static function wallet(Request $request)
    {
        
        return view('pages/wallet');         
    }
}