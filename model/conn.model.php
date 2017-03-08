<?php
class ConexionDB{
  private static $dbhost="localhost";
  private static $dbname="proyecto_grado";
  private static $dbuser="root";
  private static $db_pass = "";
 private static $conn=null;

  public static function AbrirBD(){
    if (null== self::$conn){

      try {

        self::$conn=new PDO('mysql:host='.self::$dbhost.";"."dbname=".self::$dbname, self::$dbuser, self::$db_pass);
         self::$conn-> exec("SET CHARACTER SET utf8");
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch(PDOException $e) {
      die($e->getMessage());
      }
      return self::$conn;
    }
  }
  public static function CerrarBD(){
    self::$conn=null;
  }
}

?>
