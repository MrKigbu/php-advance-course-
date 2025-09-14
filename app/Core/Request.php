<?php

namespace App\Core;

class Request
{
    //base
    public static function base ()
    {
        return trim(dirname($_SERVER['SCRIPT_NAME']), '/');
    }
    //uri
    public static function uri()
{
    //check if ssl exist 
    if (!self::secure()) {
        $t = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        //get base 
        $b = self::base();

        //check if base is in uri
        if ($b && strpos($t, $b) === 0) {
            $t = substr($t, strlen($b));
        }

        return $t ?: '/';
    } else {
        // when secure() is true
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
}
    //ssl
    public static function secure()
    {
        return isset($_SERVER['HTTPS']) && $_SERVER 
        ['HTTPS'] != 'off';
    }

    //method 
    public static function method ()
    {
        return $_SERVER ['REQUEST_METHOD'];
    }

    //IF ITS POST 
    public static function isPost ()
    {
        return self ::method() == 'POST';
    }

    //is get 
    public static function isGet ()
    {
        return self ::method() == "GET";
    }

    //IS AJAX
    public static function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] =='XMLHttpRequest';
    }
    //is PUT
    public static function isPut ()
    {
        return self::method() =='PUT';
    }

    //IS DELETE 
    public static function isDelete()
    {
        return self::method() == 'DELETE';
    }

    //IS PATCH
    public static function isPatch()
    {
        return self::method() == 'PATCH';
    }
    //IS ANY 
    public static function isAny()
    {
        return self::isPost() || self::isGet() || self::isPut() || self::isDelete() || self::isPatch();
    }
}