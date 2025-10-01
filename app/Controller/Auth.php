<?php
namespace App\Controller;

use App\Core\Model;
use App\Core\Request;
use App\Core\Authentication;

class Auth 
{
    //register 
   public static function register(Request $request)
{
    try {
        $first_name = $request->input('first_name');
        $last_name  = $request->input('last_name');
        $phone      = cleanPhone ($request->input('phone'));        
        $email      = $request->input('email');
        $password   = $request->input('password');
        // check if email already exists
        $user = Model::getSingle('users', 'email', $email);
        if ($user) {
            response_json(['code' => 400, 'message' => 'Email already exists']);
        }
        //hash password
        $password = password_hash($password, PASSWORD_DEFAULT);
        //insert into database
        $newUser = Model::create('users', [
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'phone'      => $phone,
            'email'      => $email,
            'password'   => $password
        ]);
        if ($newUser) {
            response_json(['code' => 200, 'message' => 'Registration successfull']);
        } else {
            response_json(['code' => 500, 'message' => 'Something went wrong']);
        }   
            
    } catch (\Exception $e) {
        response_json(['code' => 500, 'message' => $e->getMessage()]);
    }
}
//login
public static function login(Request $request)
{
    try {
        $email    = $request->input('email');
        $password = $request->input('password');
        //check if email exists
        $user = Model::getSingle('users', 'email', $email);
        if (!$user) {
            response_json(['code' => 400, 'message' => 'Invalid email']);
        }
        //verify password
        if (!password_verify($password, $user->password)) {
            response_json(['code' => 400, 'message' => 'Invalid password']);
        }
        //login user
        $auth = new Authentication();
         if ($auth->login($user)) {
            response_json(['code' => 200, 'message' => 'login successfull', 
            'redirect' => url('dashboard')]);
        } else {
            //if something happens during login
            response_json(['code' => 500, 'message' => 'Login failed']);
        }
    } catch (\Exception $e) {
        response_json(['code' => 500, 'message' => $e->getMessage()]);
    }
}
}