<?php

class DataBase{
  private static $dbhost="localhost";
  private static $dbname="proyecto_grado";
  private static $dbuser="root";
  private static $dbpass="";
  private static $conn=null;

  public static function connect(){
    if (self::$conn==null){

      try {

        self::$conn=new PDO('mysql:host='.self::$dbhost'.;dbname='.self::$dbname.'',self::$dbuser,self::$dbpass);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db_conn->exec("SET CHARACTER SET utf8");

      } catch (Exception $e) {
        echo $e->getMessage();
      }
      return self::$conn;
    }
  }

  public static function disconnect(){
    self::$conn=null;
  }
}

?>
