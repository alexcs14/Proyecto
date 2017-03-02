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

        self::$conn=new PDO('mysql:host='.self::$dbhost.';dbname='.self::$dbname,self::$dbuser,self::$dbpass);
        self::$conn->exec("SET CHARACTER SET utf8");

      } catch (PDOException $e) {
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
