<?php
class Gestionar_donacion{

  function Crear($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar ){
    $pdo= ConexionDB::AbrirBD();
    $pdo->setAttribute(PDO::ARRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="insert into donacion ($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res
     ,$don_fecha_cita ,$don_lugar)(?,?)";
    $query= $pdo->prepare($sql);
    $query->execute(array($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar));
    ConexionDB::CerrarBD();
  }
  function Consultar(){
    $pdo= ConexionDB::AbrirBD();
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "SELECT * FROM donacion ";
    $query= $pdo->prepare($sql);
    $query->execute();

    $result=$query->fetchALL(PDO::FETCH_BOTH);
    ConexionDB::CerrarBD();
    return $result;
  }
  function Modificar($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar){
    $pdo= ConexionDB::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="UPDATE donacion set don_usu_cod=? , don_td_cod=? don_fecha_res=? don_fecha_cita=? don_lugar=? where don_cod=?";
    $query= $pdo->prepare($sql);
    $query->execute(array($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar));

    ConexionDB::CerrarBD();
  }
  function Eliminar($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar){
    $pdo= ConexionDB::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="delete from donacion where usu_cod=?";
    $query= $pdo->prepare($sql);
    $query->execute(array($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar));

    ConexionDB::CerrarBD();
  }

} ?>
