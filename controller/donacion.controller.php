<?php
 require_once("model/conn.model.php");
 require_once("model/donacion.class.php");

$action=$_REQUES["action"];

switch ($accion){
  case 'A':
  $don_cod=$_POST["Codigo"];
  $don_usu_cod=$_POST["Codigo de suario"];
  $don_td_cod=$_POST["Tipo de donacion"];
  $don_fecha_res=$_POST["Fecha de reserva"];
  $don_fecha_cita=$_POST["Fecha de citacion"];
  $don_lugar=$_POST["lugar de citacion"];

  if($don_cod=="" or $don_usu_cod=="" or $don_td_cod=="" or  $don_fecha_res=="" or $don_fecha_cita=="" or $don_lugar==""){
    echo "Debes llanar todos los campos para continuar,Por favor verificarlos. ";
  }else{
    try {
    }catch(Exception $e){
      Gestionar_donacion::Crear( $don_cod,$don_usu_cod,$don_td_cod, $don_fecha_res, $don_fecha_cita, $don_lugar);
      echo $e;
    }
  }
  break;




  case 'C':
  $don_td_cod=$_POST["Tipo de donacion"];
  $don_fecha_res=$_POST["Fecha de reserva"];
  $don_fecha_cita=$_POST["Fecha de citacion"];
  $don_lugar=$_POST["lugar de citacion"];
    try {
      Gestionar_donacion::Modificar($don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar);
    } catch (Exception $e) {
      echo $e;
    }
  break;
  case 'D':
  // 	echo "
  // 	<script>
  // 		confirm('desea eliminar');
  // 		if (confirm) {".
  //
  // 		"}
  // 	</script>";
  $don_cod=$_POST["codigo"];
  try {
    Gestionar_donacion::Eliminar($don_cod ,$don_usu_cod,$don_td_cod ,$don_fecha_res ,$don_fecha_cita , $don_lugar);
    echo 'Eliminado con exito';
  } catch (Exception $e) {
    echo $e;
  }

  break;
}
header("location: views/module/donacion.php");
 ?>
