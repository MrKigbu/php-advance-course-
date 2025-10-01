<?php

namespace App\Controller;

use App\Core\Model;
use App\Core\Request;
use App\Core\Database;


class HomeController 
{
    public static function index(Request $request)
    {
        $name = "John Doe";
        $age = 30;
        return View('home/home', compact('name', 'age'));
    }
    //login
       public static function login(Request $request)
    {
        return view('auth/signin');
    } 
    //register page
        public static function register(Request $request)
    {
       
        return view('auth/register');
    } 
    //About 
    public static function about(Request $request)
    {
        echo "about";
    }
    //contact
    public static function contact(Request $request)
    {
        echo "contact";
    }
    //blog
    public static function blog(Request $request, $args)
    {
        echo "blog";
        
    }
    //area
    public static function area(Request $request, $args)
    {
        echo "<h1>Area External</h1>";
        
        
    }
    
}