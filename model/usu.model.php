<?php

class UsuModel{
  private $pdo;

  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()."".$e->getLine()."".$e->getFile());
      }
    }

  public function create_vol($data){
  try {
    $sql="INSERT INTO usuario VALUES ('',1,?,?,?,?,?,?,?,?,?,?,?,?)";
    $query=$this->pdo->prepare($sql);
    $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13]));

    $msn = "Guardado con exito";
  } catch (PDOException $e){
    die($e->getMessage()."".$e->getLine()."".$e->getLine());
  }
  return $msn;
  }

  function create_admin($usu_cod,$usu_rol_cod,$usu_nom,$usu_dire,$usu_tel,$usu_pass){
    try {
      $sql="INSERT INTO usuario($usu_cod,$usu_rol_cod,$usu_nom,$usu_dire,$usu_tel,$usu_pass) VALUES ('',1,?,?,?,?)";
      $query=$pdo->prepare($sql);
      $query->execute(array($usu_cod,$usu_rol_cod,$usu_nom,$usu_dire,$usu_tel,$usu_pass));

      $msn="Guardado con exito";

    } catch (Exception $e) {
      die($e->getMessage()."".$e->getLine()."".$e->getLine());
    }
  }
  // function read_admin(){
  //
  // }
  //
  // function read_vol(){
  //
  // }
  //
  // function update_admin(){
  //
  //
  // }
  //
  // function update_vol(){
  //
  //
  // }
  //
  // function delete_admin(){
  //
  //
  // }
  //
  // function delete_vol(){
  //
  //
  // }

  public function __DESTRUCT(){
    DataBase::disconnect();
  }
}
?>
