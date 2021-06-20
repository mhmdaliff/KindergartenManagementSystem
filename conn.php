<?php
  class Database
  {
    private static $dbName = 'id16864051_kms' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'id16864051_kindergartenmanagementsystem';
    private static $dbUserPassword = 'y>us|WqIy1yu&b4I';
     
    private static $cont  = null;
     
    public function __construct() {
      die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
      try
      {
        self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
      }
      catch(PDOException $e)
      {
        die($e->getMessage()); 
      }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
      self::$cont = null;
    }
  }
?>