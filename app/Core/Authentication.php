<?php
namespace App\Core;

class Authentication
{
    //instance
    public function instance()
    {
        return new Authentication;
    }   

   //login function
   public function login($user)
    {
         //set session
         $session = new Session();
         $session->set('user', $user);
            return true;
    }
    
    
    //logout function
    public function logout()
    {
        //destroy session
        $session = new Session();
        $session->destroy('user');
        return true;
    }

    //user function
    public static function user()
    {
        $session = new Session();
        return $session->get('user');
    }

    //check if user is logged in
    public function checkLogin()
    {
        $session = new Session();
        if ($session->get('user')) {
            return true;
        }
        return false;
    }
    //checkAdmin
    public function checkAdmin()
    {
        $session = new Session();
        $user = $session->get('user');
        if ($user->role == 'admin') {
            return true;
        }
        return false;
    }  
    
    //get name
    public static function name()
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->first_name . ' ' . $user->last_name;
    }

    //get email
    public static function getEmail()  
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->email;
    }

    //get role
    public static function getRole()
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->role;
    }
    //get id
    public static function getId()
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->id;
    }

    //get first name
    public static function getFirstName()
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->first_name;
    }

    //get last name
    public static function getLastName()
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->last_name;
    }

    //get phone
    public static function getPhone()   
    {
        $session = new Session();
        $user = $session->get('user');
        return $user->phone;
    }


}

