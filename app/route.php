<?php

use App\Controller\Auth;
use App\Controller\HomeController;
use App\Controller\UserController;
use App\Core\Request;
use App\Core\Route;

$route = new Route;
$route::get('/', [HomeController::class, 'index']);
//login
$route::get('/login', [HomeController::class, 'login']);

//register
$route::get('/register', [HomeController::class, 'register']);


//post method
$route::post('/register-user', [Auth::class, 'register']);

//post method login
$route::post('/login-user', [Auth::class, 'login']);

//logout
$route::get('/logout', [Auth::class, 'logout']);

//middleware route
$route->middleware('user', function($middleware) use ($route){
    //route user
    $route::get('/user', [HomeController::class, 'user'], $middleware);
    //dashboard
    $route::get('/user/dashboard', [UserController::class, 'dashboard'], $middleware);
    //wallet
    $route::get('/user/wallet', [UserController::class, 'wallet'], $middleware);
    //profile
    $route::get('/user/profile', [UserController::class, 'profile'], $middleware);
    //airtime
    $route::get('/user/airtime', [UserController::class, 'airtime'], $middleware);
    //data  
    $route::get('/user/data', [UserController::class, 'data'], $middleware);
    //subscription
    $route::get('/user/subscription', [UserController::class, 'subscription'], $middleware);
    //Transactions
    $route::get('/user/Transactions', [UserController::class, 'Transactions'], $middleware);
    //verify transaction
    $route::get('/user/verify-transaction/{transaction_id}', [UserController::class, 'verifyTransaction'], $middleware);

});
//blog
$route::get('/blog/{id}/{title}', [HomeController::class, 'blog']);
$route::get('/blog/{id}/{title}/{slug}/{amount}', [HomeController::class, 'blog']);
//About
$route::get('/about', [HomeController::class, 'about']);
//contact
$route::get('/contact-us', [HomeController::class, 'contact']);
// inline function 
$route::get('/area/{id}/{title}', function(Request $request, $args) {
    echo "<h1> AREA </h1>";
    var_dump($args);
});

//external function
$route::get('/area/{id}/{title}/{slug}', [HomeController::class, 'Area']);

//run 
$route::run();