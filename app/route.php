<?php

use App\Controller\HomeController;
use App\Core\Request;
use App\Core\Route;

$route = new Route;
$route::get('/', [HomeController::class, 'index']);
//login
$route::get('/login', [HomeController::class, 'login']);
//register
$route::get('/register', [HomeController::class, 'register']);
//middleware route
$route->middleware('user', function($middleware) use ($route){
    //route user
    $route::get('/user', [HomeController::class, 'user'], $middleware);
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
});

//external function
$route::get('/area/{id}/{title}/{slug}', [HomeController::class, 'Area']);

//run 
$route::run();