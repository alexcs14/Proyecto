<?php

class ConexionDB{
  private static $dbhost="localhost";
  private static $dbname="proyecto_grado";
  private static $dbuser="root";
  private static $conn=null;

  public static function starDB(){
    if (self::$conn=null){

      try {

        self::$conn=new PDO('mysql:host='.self::$dbhost'.;dbname='.self::$dbname.'',self::$dbuser,self::$dbpass);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch (Exception $e) {
        echo $e->getMessage();
      }
      return self::$conn;
    }
  }

  public static function CerrarBD(){
    self::$conn=null;
  }
}

?>
