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
    //profile
    public static function profile(Request $request)
    {
        
        return view('pages/profile');         
    }
    //airtime
    public static function airtime(Request $request)
    {
        
        return view('pages/airtime');         
    }
    //data
    public static function data(Request $request)
    {
        
        return view('pages/data');         
    }
    //subscription
    public static function subscription(Request $request)
    {
        
        return view('pages/subscription');         
    }

    //Transactions
    public static function Transactions(Request $request)
    {
        
        return view('pages/Transactions');         
    }

}