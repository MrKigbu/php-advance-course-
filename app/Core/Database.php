<?php
namespace App\Core;
use PDO;

class Database{
const DB_HOST = '127.0.0.1:8889'; // 👈 use MAMP MySQL port (i used 'localhost) which worked on my instructors own
const DB_USER = 'root';
const DB_PASS = 'root';
const DB_NAME = 'phpadvance';

    private static $dbh;
    //make conection
    public static function connect() {
      try {
        $dbh = new PDO('mysql:host=' . self::DB_HOST . ';dbname='. self::DB_NAME, self::DB_USER, self::DB_PASS);
        //set error mode
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //set default fetch mode
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        //set dbh
        self::$dbh = $dbh;
        
      } catch (\PDOException $e) {
        //throw an exception
        throw new \PDOException($e->getMessage(), (int)$e->getCode(), $e->getPrevious(), $e->getTraceAsString(), $e->getFile(), $e->getLine());
      } catch (\Exception $e) {
        //throw an exception
        throw new \Exception($e->getMessage(), (int)$e->getCode(), $e->getPrevious(), $e->getTraceAsString(), $e->getFile(), $e->getLine());    
        
      }
    }
      
    //dbh
    public static function dbh() {
       self::connect();
        return self::$dbh;
    }
}
