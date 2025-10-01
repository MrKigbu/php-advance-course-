<?php
//check if function exists
if (!function_exists('view'))
{
    function view($view, $args = [])
    {
        return \App\Core\View::render($view, $args);
    }
}

//ade_include
//check if function exist 
if (!function_exists('ade_include'))
{
    function ade_include($view, $args = [])
    {
        echo \App\Core\View::returnRender($view, $args);
    }
}

//extend
//check if function exist 
if (!function_exists('extend'))
{
    function extend($view, $section = null, $args = []) {
    echo \App\Core\View::extend($view, $section, $args);
}
}
//section
//Check if section exist 

if (!function_exists('section'))
{
    function section($section)
    {
        echo \App\Core\View::section($section);
    }
}

//endsection
//check if function exists
if (!function_exists('endsection'))
{
    function endsection()
    {
        return \App\Core\View::endsection();
    }
}

//ade_yeild
//check if function exist 
if (!function_exists('ade_yeild'))
{
    function ade_yeild($section)
    {
        echo \App\Core\View::yield($section);
    }
}
//pushScript
//check if function exist s
if (!function_exists('pushScript'))
{
    function pushScript($section)
    {
        echo \App\Core\View::pushScript($section);
    }
}

//endPushScript
//check if function exist 
if (!function_exists('endPushScript'))
{
    function endPushScript()
    {
        return \App\Core\View::endPushScript();
    }
}

//esc_url
//check if funtion exists 
if (!function_exists('esc_url'))
{
    function esc_url($url)
    {
        return \App\Core\Component::esc_url($url);
    }
}
//App\Core\Route::redirect
//check if function exists
if(!function_exists('redirect')){
    //redirect
    function redirect($url)
    {
        return \App\Core\Route::redirect($url);
    }
}

//base_url
//check if function exists
if(!function_exists('baseurl')){
    //baseurl
    function baseurl()
    {
        return App\Core\Request::baseurl();
    }
}

//assets
//check if function exists
if(!function_exists('assets')){
    //assets
    function assets($path)
    {
        return \App\Core\Component::assets($path);
        
    }
}
//url
//check if function exists
if(!function_exists('url')){
    //url
    /** generate url
     * @param string $path
     * @return string
     */
    function url($path)
    {
        return \App\Core\Component::url($path);
        
    }
}

//response json
//check if function exists
if(!function_exists('response_json')){
    //response json
    function response_json($array)
    {
        return \App\Core\Component::response_json($array);
        
    }
}

//CleanPhone
//check if function exists
if(!function_exists('cleanPhone')){
    //clean phone
    function cleanPhone($phone)
    {
        return \App\Core\Component::cleanPhone($phone);
        
    }
}

//auth
//check if function exists
if(!function_exists('auth')){
    function auth()
{
    $auth = new \App\Core\Authentication();
    return $auth->instance();
}
}