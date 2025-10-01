<?php
namespace App\Core;

class Component
{
    //escape url
    public static function esc_url($url)
    {
        //check if url is empty
        if (empty($url)) {
            return $url;
        }
        //check if url is string 
        if (is_string($url)){
            //return url
            return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        }
        //return $url
        return $url;
    }
    //esc_html

    public static function esc_html($html)
    {
        //check if url is empty
        if (empty($html)) {
            return $html;
        }
        //check if url is string 
        if (is_string($html)){
            //return url
            return htmlentities($html, ENT_QUOTES, 'UTF-8');
        }
        //return $url
        return $html;
    }

    //asset
    public static function assets($path)
    {
        $baseurl = baseurl();
        return rtrim($baseurl, '/') . '/' . ltrim($path, '/');
    }
    
    //url
    public static function url($path)
    {
        $baseurl = baseurl();
        return rtrim($baseurl, '/') . '/' . ltrim($path, '/');
    }
    
    //sanitize_string 
    

    public static function sanitize_string($string)
    {
        //check if string is empty
        if (empty($string)) {
            return $string;
        }
        //check if string is string 
        if (is_string($string)){
            //return string
            return filter_var($string, FILTER_SANITIZE_STRING);
        }
        //return string
        return $string;
    }
    
    //sanitize_email
    
    public static function sanitize_email($email)
    {
        //check if email is empty
        if (empty($email)) {
            return $email;
        }
        //check if email is string 
        if (is_string($email)){
            //return email
            return filter_var($email, FILTER_SANITIZE_EMAIL);
        }
        //return email
        return $email;
    }
    //sanitize_url
    public static function sanitize_url($url)
    {
        //check if url is empty
        if (empty($url)) {
            return $url;
        }
        //check if url is string 
        if (is_string($url)){
            //return url
            return filter_var($url, FILTER_SANITIZE_URL);
        }
        //return url
        return $url;
    }

    //respose json
    public static function response_json($array = [])
    {
        header('Content-Type: application/json');
        //check if $array is array
        if (!is_array($array)) {
            $array = [$array];
        }
        echo json_encode($array);
        die;
    }

    //clean phone number
    public static function cleanPhone($phone_number)
    {
        //check if phone number is empty
        if (empty($phone_number)) {
            return $phone_number;
        }
        //check if phone number is string 
        if (is_string($phone_number)){
            return preg_replace('/[^0-9]/', '', $phone_number);
        }
        //return phone number
                return $phone_number;

    }

}

