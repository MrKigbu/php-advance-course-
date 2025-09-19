<?php
namespace App\Core;

use App\Core\Session;

class MiddleWare
{
    //entry point
    public static function action($action = "")
    {
        if(method_exists(self::class, $action)) {
            return self::$action();
        } else{
            return ['error'=> 'MiddleWare {' . $action . '} action not found', 'code' => 404];
        }
    }

    //MiddleWares

    //user
    public static function  user()
    {
        $session = new Session;
        if(!$session->has('user'))
        {
            return ['error' => 'You are not logged in', 'code' => 401, 'redirect' => '/login'];

        }
        //return true
        return ['code' => 200];
    }
    
}